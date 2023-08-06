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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addUserModal">Thêm mới</button>
                        <div class="modal fade" id="addUserModal"  aria-labelledby="addUserModal" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm mới tour</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form id="form-add-student" action="index.php?page=admin&controller=products&action=add" enctype="multipart/form-data" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div  class="col-6"><label>Mã tour</label><input class="form-control" type="text" placeholder="Mã tour" name="matour" /></div>  
                                            </div>
                                            <div class="row">
                                                <div  class="col-6"><label>Tên tour</label><input class="form-control" type="text" placeholder="Tên tour" name="name" /></div>
                                                
                                            </div>
                                            <div class="form-group"> <label>Chi Nhánh</label> <select name="MaCN" id="MaCN"><?php 
                                                $db = DB::getInstance();
                                                $req = $db->query("SELECT * FROM chinhanh");
                                                while($row = $req->fetch_assoc()) {
                                                    echo "<option value='" . $row['MaCN'] . "'>" . $row['MaCN'] . "</option>";
                                                }
                                            ?></select></div>
                                            <div class="form-group"> <label>Loại Tour</label> 
                                                <select name="LoaiTour" id="LoaiTour">
                                                    <?php
                                                        echo "<option value='1'> Trong ngày </option>";
                                                        echo "<option value='2'> Dài ngày </option>";
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group"> <label>Hình ảnh </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>
                                            <div class="form-group"> <label>Ngày bắt đầu</label> <textarea class="form-control" name="NgayBatDau" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số khách Tour tối thiểu</label> <textarea class="form-control" name="SoKhachTourToiThieu" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số khách Tour tối đa</label> <textarea class="form-control" name="SoKhachTourToiDa" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé lẻ người lớn</label> <textarea class="form-control" name="GiaVeLeNguoiLon" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé lẻ trẻ em</label> <textarea class="form-control" name="GiaVeLeTreEm" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé đoàn người lớn</label> <textarea class="form-control" name="GiaVeDoanNguoiLon" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Giá vé đoàn trẻ em</label> <textarea class="form-control" name="GiaVeDoanTreEm" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số khách đoàn tối thiểu</label> <textarea class="form-control" name="SoKhachDoanToiThieu" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số đêm</label> <textarea class="form-control" name="SoDem" rows="1"></textarea></div>
                                            <div class="form-group"> <label>Số ngày</label> <textarea class="form-control" name="SoNgay" rows="1"></textarea></div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <div class="row"></div>
                                <table id="TAB-product" class="table table-bordered table-striped"> 
                                    <thead>
                                        <tr  class="text-center">
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên tour</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody> 
                                        <?php
                                            
                                            $index = 1;

                                            foreach ($products as $product) {  
                                                                                         
                                                echo 
                                                "<tr class=\"text-center\">
                                                    <td>"
                                                        . $index. 
                                                    "</td>
                                                    <td>
                                                       ". $product->MaCN."
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
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px;\" data-id='$product->MaCN' data-name='$product->TenTour' data-price='$product->SoKhachDoanToiThieu' data-description='$product->SoDem' data-content='$product->SoNgay' data-img='$product->Anh'> <i style=\"font-size:17px;\" class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$product->MaCN' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button> 
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
                                                         <div  class="col-12"><input class="form-control" type="hidden" placeholder="Name" name="id"  readonly/></div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Tên tour</label><input class="form-control" type="text" placeholder="Tên tour" name="name" /></div>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group"> <label>Mô tả</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                                        <div class="form-group"> <label>Nội dung</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                                        
                                                        <div class="form-group"> <label> Hình ảnh </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>

                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-primary formedit" type="submit">Cập nhật</button></div>
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