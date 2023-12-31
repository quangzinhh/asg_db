<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>

<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>

<!-- Code -->
<div class="content-wrapper">
	<!-- Add Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý Tour</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?page=admin&controller=layouts&action=index">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý Tour</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header-->
                        <div class="card-body">
                        <div class="container mt-4" style="margin-bottom: 15px;">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addUserModal">Thêm mới</button>
                            <form action="index.php?page=admin&controller=products&action=xemdoanhthu" style="float: right;" method = "post">
                                <div class="input-group">
                                <input class="form-control" type="text" id="name" placeholder="Nhập năm" name="namdoanhthu" style="max-width: 50%;">
                                <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#doanhthu">Xem doanh thu</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="modal fade" id="addUserModal"  aria-labelledby="addUserModal" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm mới tour</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form id="form-add-student" action="index.php?page=admin&controller=products&action=add" enctype="multipart/form-data" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="name">Tên tour <span style="color: red;">*</span></label>
                                                    <input class="form-control" type="text" id="name" placeholder="Tên tour" name="name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="MaCN">Chi Nhánh <span style="color: red;">*</span></label>
                                                <select class="form-control" name="MaCN" id="MaCN">
                                                    <?php 
                                                        $db = DB::getInstance();
                                                        $req = $db->query("SELECT * FROM chinhanh");
                                                        while($row = $req->fetch_assoc()) {
                                                            echo "<option value='" . $row['MaCN'] . "'>" . $row['MaCN'] . "</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group"> <label>Loại Tour <span style="color: red;">*</span></label> 
                                            <select class="form-control" name="LoaiTour" id="LoaiTour">
                                                    <option value="1"> Trong ngày </option>
                                                    <option value="2"> Dài ngày </option>
                                                </select>
                                            </div>
                                            <div class="form-group"> <label>Hình ảnh<span style="color: red;">*</span> </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>
                                            <div class="form-group"> <label>Ngày bắt đầu <span style="color: red;">*</span> </label> <input type="date" class="form-control" id="ngaybatdau" name="NgayBatDau"></div>
                                            <div class="form-group"> <label>Số khách Tour tối thiểu <span style="color: red;">*</span> </label> <textarea class="form-control" name="SoKhachTourToiThieu" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số khách Tour tối đa <span style="color: red;">*</span> </label> <textarea class="form-control" name="SoKhachTourToiDa" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé lẻ người lớn<span style="color: red;">*</span></label> <textarea class="form-control" name="GiaVeLeNguoiLon" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé lẻ trẻ em<span style="color: red;">*</span></label> <textarea class="form-control" name="GiaVeLeTreEm" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé đoàn người lớn<span style="color: red;">*</span></label> <textarea class="form-control" name="GiaVeDoanNguoiLon" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé đoàn trẻ em<span style="color: red;">*</span></label> <textarea class="form-control" name="GiaVeDoanTreEm" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số khách đoàn tối thiểu<span style="color: red;">*</span></label> <textarea class="form-control" name="SoKhachDoanToiThieu" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số đêm<span style="color: red;">*</span></label> <textarea class="form-control" id="SoDem" name="SoDem" rows="1" disabled></textarea></div>
                                            <div class="form-group"> <label>Số ngày<span style="color: red;">*</span></label> <textarea class="form-control" id="SoNgay" name="SoNgay" rows="1" disabled></textarea></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="doanhthu" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Xem doanh thu</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                            <div class="row"></div>
                                <table id="TAB-product" class="table table-bordered table-striped"> 
                                    <thead>
                                        <tr  class="text-center">
                                            <th scope="col">STT</th>
                                            <th scope="col">Mã tour</th>
                                            <th scope="col">Tên tour</th>
                                            <th scope="col">Ngày bắt đầu</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody> 
                                        <?php
                                            
                                            $index = 1;

                                            foreach ($products as $product) {  
                                                $db = DB::getInstance();
                                                $LichTrinh = "";                                   
                                                for($i = 1; $i<$product->SoNgay; $i++) {
                                                    $req = $db->query("SELECT * FROM hanhdonglichtrinhtour WHERE (STTNgay = $i AND MaTour = '$product->MaTour') ORDER BY GioBatDau");
                                                    $LichTrinh = $LichTrinh."<div style=\"font-weight: bold;\"> Ngày thứ $i </div> <br>";
                                                    while($row = $req->fetch_assoc()) {
                                                        $hanhDongMapping = array(
                                                            1 => "Khởi hành tour",
                                                            2 => "Kết thúc tour",
                                                            3 => "Ăn sáng",
                                                            4 => "Ăn trưa",
                                                            5 => "Ăn tối",
                                                            6 => "Check in",
                                                            7 => "Check out",
                                                            

                                                        );
                                                        $LichTrinh = $LichTrinh."<div>".date("H:i", strtotime($row["GioBatDau"]))." - ".date("H:i", strtotime($row['GioKetThuc'])).": ".$hanhDongMapping[$row['LoaiHanhDong']]."</div><br>";
                                                    }
                                                } 
                                                echo 
                                                "<tr class=\"text-center\">
                                                    <td>"
                                                        . $index. 
                                                    "</td>
                                                    <td>
                                                       ". $product->MaTour."
                                                    </td>
                                                    <td>
                                                    " .  $product->TenTour."
                                                    </td>   
                                                    <td>
                                                     " .  $product->NgayBatDau."
                                                    </td> 
                                                    <td>
                                                    <img style=\"width: 300px; height:300px;\" src='$product->Anh'>
                                                    </td>   
                                                    <td >
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px;\" data-id='$product->MaTour' data-matour='$product->MaTour' data-anh='$product->Anh' data-tentour='$product->TenTour' data-ngaybatdau='$product->NgayBatDau' data-sokhachtourtoithieu='$product->SoKhachTourToiThieu' data-sokhachtourtoida='$product->SoKhachTourToiDa' data-giavelenguoilon='$product->GiaVeLeNguoiLon'
                                                    data-lichtrinh='$LichTrinh'
                                                    data-giaveletreem='$product->GiaVeLeTreEm' data-giavedoannguoilon='$product->GiaVeDoanNguoiLon' data-giavedoantreem='$product->GiaVeDoanTreEm' data-sokhachdoantoithieu='$product->SoKhachDoanToiThieu' data-sodem='$product->SoDem' data-songay='$product->SoNgay' data-macn='$product->MaCN'> <i style=\"font-size:17px;\" class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-add btn btn-success btn-xs\" style=\"margin-right: 5px\" data-id='$product->MaTour' data-ngaystart='$product->NgayBatDau' ><i style=\"font-size:17px;\" class=\"fas fa-plus\"></i></button> 
                                                    <form action=\"index.php?page=admin&controller=products&action=xemlichtrinh\" method=\"POST\">
                                                        <input type=\"hidden\" name=\"matour\" value='$product->MaTour'>
                                                        <input type=\"hidden\" name=\"ngaybatdau\" value='$product->NgayBatDau'>
                                                        <input type=\"hidden\" name=\"ten\" value='$product->TenTour'>
                                                        
                                                        <button class=\"btn btn-view btn-xs\" style=\"margin-right: 5px\" type=\"submit\">
                                                            <i style=\"font-size: 17px;\" class=\"fas fa-eye\"></i>
                                                        </button> 
                                                    </form>

                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$product->MaTour' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button> 
                                                    </td>     
                                                    <td>
                                                    
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                                $index++;
                                            }
                                        ?>
                                    </tbody>
                                    <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Chỉnh sửa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form id="form-edit-student" action="index.php?page=admin&controller=products&action=edit" enctype="multipart/form-data" method="post">
                                                    <div class="modal-body">
                                                         <div  class="col-12"><input class="form-control" type="hidden" placeholder="Name" name="id" /></div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Mã tour</label><input class="form-control" type="text" name="matour" readonly /></div>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group"> <label>Tên tour</label> <input class="form-control" type="text" name="tentour" /></div>
                                                        <div class="form-group"> <img style="width: 50%;" src="" alt="" name="ngaybatdau" /></div>
                                                        <div class="form-group"> <label>Ngày bắt đầu</label> <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau"></div>
                                                        <div class="form-group"> <label>Số khách tour tối thiểu</label> <input class="form-control" type="text" name="sokhachtourtoithieu" /></div>
                                                        <div class="form-group"> <label>Số khách tour tối đa</label> <input class="form-control" type="text" name="sokhachtourtoida" /></div>
                                                        <div class="form-group"> <label>Giá vé lẻ người lớn</label> <input class="form-control" type="text" name="giavelenguoilon" /></div>
                                                        <div class="form-group"> <label>Giá vé lẻ trẻ em</label> <input class="form-control" type="text" name="giaveletreem" /></div>
                                                        <div class="form-group"> <label>Giá vé đoàn người lớn</label> <input class="form-control" type="text" name="giavedoannguoilon" /></div>
                                                        <div class="form-group"> <label>Giá vé đoàn trẻ em</label> <input class="form-control" type="text" name="giavedoantreem" /></div>
                                                        <div class="form-group"> <label>Số khách đoàn tối tối thiểu</label> <input class="form-control" type="text" name="sokhachdoantoithieu" /></div>
                                                        <div class="form-group"> <label>Số đêm</label> <input class="form-control" type="text" name="sodem" readonly /></div>
                                                        <div class="form-group"> <label>Số ngày</label> <input class="form-control" type="text" name="songay" readonly  /></div>
                                                        <div class="form-group"> <label>Mã chi nhánh</label> <input class="form-control" type="text" name="macn"readonly  /></div>
                                                        <div class="form-group"> <label>Lịch trình</label> <div id="lichtrinh"> </div></div>
                                                        
                                                        
                                                        <!-- <div class="form-group"> <label>Mã Chi Nhánh</label> <textarea class="form-control" name="ca" rows="3"></textarea></div> -->

                                                        <!-- <div class="form-group"> <label>Mã Tour</label> <textarea class="form-control" name="matour" rows="10"></textarea></div> -->
                                                        
                                                        <div class="form-group"> <label> Hình ảnh </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>

                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-primary formedit" type="submit">Cập nhật</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="ViewStudentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Xóa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="AddStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Thêm lịch trình</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form id="form-add-student" action="index.php?page=admin&controller=products&action=addLichTrinh" enctype="multipart/form-data" method="post">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div  class="col-6"><label>Mã tour</label><input class="form-control" type="text" placeholder="Mã tour" name="id" readonly /></div>  
                                                        </div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Ngày bắt đầu</label><input class="form-control" type="text" placeholder="Ngày bắt đầu" name="ngaystart" readonly /></div>  
                                                        </div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Ngày</label><input class="form-control" type="text" placeholder="Ngày" name="ngay" /></div>
                                                            
                                                        </div>
                                                        <div class="form-group"> <label>Hành động</label> <select name="action" id="action" class="form-control">
                                                            <option value="1">Khởi hành tour</option>
                                                            <option value="2">Kết thúc tour</option>
                                                            <option value="3">Ăn sáng</option>
                                                            <option value="4">Ăn trưa</option>
                                                            <option value="5">Ăn tối</option>
                                                            <option value="6">Check in</option>
                                                            <option value="7">Check out</option>
                                                            <option value="8">Di chuyển</option>
                                                        </select></div>
                                                        <label for="MaDV">Đơn vị cung cấp dịch vụ <span style="color: red;">*</span></label>
                                                        <select class="form-control" name="MaDV" id="MaDV">
                                                            <?php 
                                                                $db = DB::getInstance();
                                                                $req = $db->query("SELECT * FROM donvicungcapdichvu");
                                                                while($row = $req->fetch_assoc()) {
                                                                    echo "<option value='" . $row['MaDonVi'] . "'>" . $row['MaDonVi'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-group"> <label>Giờ bắt đầu</label> 
                                                            <input type="time" name="starttime" id="starttime" />
                                                        </div>
                                                        <div class="form-group"> <label>Giờ kết thúc</label> 
                                                            <input type="time" name="endtime" id="endtime" />
                                                        </div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Mô tả</label><input class="form-control" type="text" placeholder="Mô tả" name="mota" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                                                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Xóa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=products&action=delete" method="post">
                                                    <div class="modal-body"><input type="hidden" name="id" />
                                                        <p>Bạn có chắc chắn muốn xóa tour này?</p>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php
require_once('views/admin/footer.php'); ?>
<script src="public/js/products/index.js"></script>
<!-- Add Javascripts -->


</body>

</html>