<?php
include_once('views/main/navbar.php');
?>

<?php
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']); 
?>
<main>
<div style="height: 8em"> </div>
<?php
    echo '<div class = container>';
    echo '<h1>Edit Profile</h1>';
    echo '<form action="index.php?page=main&controller=register&action=editInfo" enctype="multipart/form-data" method="post">
    <div class="modal-body">
      <input type="hidden" name="email">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="row"> </div>
            <label style="font-weight: bold" >Họ và tên lót</label>
            <input class="form-control" type="text" placeholder="Họ và tên lót" name="fname" value="' . $data->fname . '"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="row"> </div>
            <label style="font-weight: bold" >Tên</label>
            <input class="form-control" type="text" placeholder="Tên" name="lname" value="' . $data->lname . '"/>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 5%;">
        <div class="col-md-6">
          <div class="form-group">
            <label style="font-weight: bold" >Tuổi</label>
            <input class="form-control" type="number" placeholder="Tuổi" name="age" value="' . $data->age . '"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label style="font-weight: bold" >Giới tính:</label>
            <div class="row">
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '1')?'checked':"") . ' value="1" />
                  <label>Nam</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '0')?'checked':"") . ' value="0" />
                  <label>Nữ</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group" style="margin-top: 5%;">
        <label style="font-weight: bold" >Số điện thoại</label>
        <input class="form-control" type="number" placeholder="Số điện thoại" name="phone" value="' . $data->phone . '"/>
      </div>
      <div class="form-group" style="margin-top: 5%;">
        <label style="font-weight: bold" >Hình ảnh hiện tại </label>
        <div style="max-width: 10em">
        <img style="width: 90%; height: auto; margin: 5%" src="' . $data->profile_photo . '">
        </div>
      </div>
      <div class="form-group" style="margin-top: 5%;">
        <label style="font-weight: bold" >Hình ảnh mới</label>&nbsp
        <input type="file" name="fileToUpload" id="fileToUpload" />
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" type="submit">Cập nhật</button>
    </div>
  </form>
</div>';
echo '</div>';
?>
</main>
<?php
include_once('views/main/footer.php');
?>