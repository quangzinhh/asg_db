<?php
require_once('controllers/admin/base_controller.php');
require_once('models/product.php');




class ProductsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'products';
	}

	public function index()
	{
        $products = Product::getAll();
        $data = array('products' => $products);
        $this->render('index', $data);
	}
    public function add(){
        $id = (string)date("Y_m_d_h_i_sa");
        $fileuploadname = (string)$id;
        $target_dir = "public/img/products/";
        $path = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $fileuploadname .= ".";
        $fileuploadname .= $ext;
        $target_file = $target_dir . basename($fileuploadname);
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        }
        $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Allow certain file formats
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
        && $fileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $upload_ok = 0;
        }
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
        }
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $MaCN = $_POST['MaCN'];
        $TenTour = $_POST['name'];
        
        $NgayBatDau = $_POST['NgayBatDau'];
        $SoKhachTourToiThieu = $_POST['SoKhachTourToiThieu'];
        $SoKhachTourToiDa = $_POST['SoKhachTourToiDa'];
        $GiaVeLeNguoiLon = $_POST['GiaVeLeNguoiLon'];
        $GiaVeLeTreEm = $_POST['GiaVeLeTreEm'];
        $GiaVeDoanNguoiLon = $_POST['GiaVeDoanNguoiLon'];
        $GiaVeDoanTreEm = $_POST['GiaVeDoanTreEm'];
        $SoKhachDoanToiThieu = $_POST['SoKhachDoanToiThieu'];
        $SoDem = $_POST['SoDem'];
        $SoNgay = $_POST['SoNgay'];
        
        Product::insert($TenTour, $target_file, $NgayBatDau, $SoKhachTourToiThieu, 
        $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN);
        header('Location: index.php?page=admin&controller=products&action=index');
    }
    public function addLichtrinh() {
        $MaTour = $_POST['id'];
        $Ngay = $_POST['ngay'];
        $HanhDong = $_POST['action'];
        $GioBatDau = $_POST['starttime'];
        $GioKetThuc = $_POST['endtime'];
        $Mota = $_POST['mota'];
        Product::addLichtrinh($MaTour, $Ngay, $HanhDong, $GioBatDau, $GioKetThuc, $Mota);
        header('Location: index.php?page=admin&controller=products&action=index');

    }
    public function xemdoanhthu() {
        $YearDoanhThu = $_POST['namdoanhthu'];
        $doanhthu = Product::doanhthu($YearDoanhThu);
        // Set a cookie with the table HTML
        setcookie('doanhthu_table', $doanhthu, time() + 3600, '/'); // Cookie expires in 1 hour
        setcookie('year_doanhthu', $YearDoanhThu, time() + 3600, '/'); // Cookie expires in 1 hour

        // Perform the redirect
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function edit(){
        $id = $_POST['id'];
        $code = (string)date("Y_m_d_h_i_sa");
        $fileuploadname = (string)$code;
        $MaTour = $_POST['matour'];
        $MaCN = $_POST['macn'];
        $TenTour = $_POST['tentour'];
        $NgayBatDau = $_POST['ngaybatdau'];
        $SoKhachTourToiThieu = $_POST['sokhachtourtoithieu'];
        $SoKhachTourToiDa = $_POST['sokhachtourtoida'];
        $GiaVeLeNguoiLon = $_POST['giavelenguoilon'];
        $GiaVeLeTreEm = $_POST['giaveletreem'];
        $GiaVeDoanNguoiLon = $_POST['giavedoannguoilon'];
        $GiaVeDoanTreEm = $_POST['giavedoantreem'];
        $SoKhachDoanToiThieu = $_POST['sokhachdoantoithieu'];
        $SoDem = $_POST['sodem'];
        $SoNgay = $_POST['songay'];
        $urlcurrent = Product::get($id)->Anh;
        if (!isset($_FILES["fileToUpload"]) || $_FILES['fileToUpload']['tmp_name'][0] == "")
        {
            Product::update($MaTour, $TenTour, $urlcurrent, $NgayBatDau, $SoKhachTourToiThieu, 
            $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN);
            echo "Dữ liệu upload bị lỗi";
            header('Location: index.php?page=admin&controller=products&action=index');
            die;
        }
        else{
            $target_dir = "public/img/products/";
            $path = $_FILES['fileToUpload']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $fileuploadname .= ".";
            $fileuploadname .= $ext;
            $target_file = $target_dir . basename($fileuploadname);
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
            }
            $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Allow certain file formats
            if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
            && $fileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $upload_ok = 0;
            }
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
            }
            $file_pointer = $urlcurrent;
            unlink($file_pointer);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            Product::update($MaTour, $TenTour, $target_file, $NgayBatDau, $SoKhachTourToiThieu, 
            $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN);
            header('Location: index.php?page=admin&controller=products&action=index');
        }
    }
    public function delete(){
        $id = $_POST['id'];
        Product::delete($id);
        header('Location: index.php?page=admin&controller=products&action=index');
    }
}
