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
        $MaTour = $_POST['matour'];
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
        
        Product::insert($MaTour, $TenTour, $target_file, $NgayBatDau, $SoKhachTourToiThieu, 
        $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN);
        header('Location: index.php?page=admin&controller=products&action=index');
    }
    // public function edit(){
    //     $id = $_POST['id'];
    //     $code = (string)date("Y_m_d_h_i_sa");
    //     $fileuploadname = (string)$code;
    //     $name = $_POST['name'];
    //     $description = $_POST['description'];
    //     $content = $_POST['content'];
    //     $urlcurrent = Product::get((int)$id)->img;
    //     if (!isset($_FILES["fileToUpload"]) || $_FILES['fileToUpload']['tmp_name'][0] == "")
    //     {
    //         Product::update($id, $name, 0, $description, $content, $urlcurrent);
    //         echo "Dữ liệu upload bị lỗi";
    //         header('Location: index.php?page=admin&controller=products&action=index');
    //         die;
    //     }
    //     else{
    //         $target_dir = "public/img/products/";
    //         $path = $_FILES['fileToUpload']['name'];
    //         $ext = pathinfo($path, PATHINFO_EXTENSION);
    //         $fileuploadname .= ".";
    //         $fileuploadname .= $ext;
    //         $target_file = $target_dir . basename($fileuploadname);
    //         if (file_exists($target_file)) {
    //             echo "Sorry, file already exists.";
    //         }
    //         $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //         // Allow certain file formats
    //         if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
    //         && $fileType != "gif" ) {
    //             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //             $upload_ok = 0;
    //         }
    //         if ($_FILES["fileToUpload"]["size"] > 500000) {
    //             echo "Sorry, your file is too large.";
    //         }
    //         $file_pointer = $urlcurrent;
    //         unlink($file_pointer);
    //         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    //         Product::update($id, $name, 0, $description, $content, $target_file);
    //         header('Location: index.php?page=admin&controller=products&action=index');
    //     }
    // }
    // public function delete(){
    //     $id = $_POST['id'];
    //     $urlcurrent = Product::get((int)$id)->img;
    //     unlink($urlcurrent);
    //     Product::delete($id);
    //     header('Location: index.php?page=admin&controller=products&action=index');
    // }
}
