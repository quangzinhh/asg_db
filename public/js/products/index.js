$("#TAB-product")
  .DataTable({
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json",
    },
    columnDefs: [{ orderable: false, targets: 6 }],
  })
  .buttons()
  .container()
  .appendTo("#TAB-product_wrapper .col-md-6:eq(0)");

$("#form-add-student").submit(function (e) {
  e.preventDefault();

  //Write code to check if student id is existed!
  //Camel case
  var name = $("#form-add-student input[name='name']").val();
  var price = $("#form-add-student input[name='price']").val();
  var description = $("#form-add-student textarea[name='description']").val();
  var content = $("#form-add-student textarea[name='content']").val();

  var url = $("#fileToUpload").val();
  var length = url.length;
  var form = $(this);
  var a = url[length - 1];
  var b = url[length - 2];
  var c = url[length - 3];
  var ext = c + b + a;
  if (name == "" || description == "" || content == "" || url == "") {
    $(document).Toasts("create", {
      class: "bg-danger",
      title: "Quản lý",
      subtitle: "Library",
      body: "Bạn phải nhập đầy đủ thông tin",
    });
  } else {
    if (price < 1000) {
      $(document).Toasts("create", {
        class: "bg-danger",
        title: "Quản lý",
        subtitle: "Library",
        body: "Bạn phải nhập giá lớn hơn 1000 đồng",
      });
    } else {
      if (ext == "jpg" || ext == "png" || ext == "jpeg" || ext == "gif") {
        $(document).Toasts("create", {
          class: "bg-success",
          title: "Quản lý",
          subtitle: "Library",
          body: "Bạn Thêm mới thành công",
        });
        form.unbind("submit").submit();
        setTimeout(function () {
        }, 1000);
      } else {
        $(document).Toasts("create", {
          class: "bg-danger",
          title: "Quản lý",
          subtitle: "Library",
          body: "Bạn phải gửi file định dạng ảnh",
        });
      }
    }
  }

  //     if (data.status == "FOUND") alert("Đã tồn tại mã số sinh viên này!");
});


// $(".btn-edit").click(function(e) {
//   console.log("I'm here");
// })

$(".btn-edit").click(function (e) {
  //console.log("I see youu")
  var id = $(this).data("id");
  var name = $(this).data("name");
  var meo = $(this).data("meo");
  var ca = $(this).data("ca");

  var description = $(this).data("description");
  var content = $(this).data("content");
  var img = $(this).data("img");
  $("#EditStudentModal input[name='id']").val(id);
  $("#EditStudentModal input[name='name']").val(name);
  $("#EditStudentModal textarea[name='meo']").val(meo);
  $("#EditStudentModal textarea[name='ca']").val(ca);

  $("#EditStudentModal textarea[name='description']").val(description);
  $("#EditStudentModal textarea[name='content']").val(content);
  $("#EditStudentModal input[name='imggg']").val(img);
  var MaTour = $(this).data("MaTour");
  var TenTour = $(this).data("TenTour");
  var Anh = $(this).data("Anh");
  var NgayBatDau = $(this).data("NgayBatDau");
  var SoKhachTourToiThieu = $(this).data("SoKhachTourToiThieu");
  var SoKhachTourToiDa = $(this).data("SoKhachTourToiDa");
  var GiaVeLeNguoiLon = $(this).data("GiaVeLeNguoiLon");
  var GiaVeLeTreEm = $(this).data("GiaVeLeTreEm");
  var GiaVeDoanNguoiLon = $(this).data("GiaVeDoanNguoiLon");
  var GiaVeDoanTreEm = $(this).data("GiaVeDoanTreEm");
  var SoKhachDoanToiThieu = $(this).data("SoKhachDoanToiThieu");
  var SoDem = $(this).data("SoDem");
  var SoNgay = $(this).data("SoNgay");
  var MaCN = $(this).data("MaCN");


  $("#EditStudentModal input[name='MaTour']").val(MaTour);
  $("#EditStudentModal input[name='TenTour']").val(TenTour);
  $("#EditStudentModal input[name='Anh']").val(Anh);
  $("#EditStudentModal input[name='NgayBatDau']").val(NgayBatDau);
  $("#EditStudentModal input[name='SoKhachTourToiThieu']").val(SoKhachTourToiThieu);
  $("#EditStudentModal input[name='SoKhachTourToiDa']").val(SoKhachTourToiDa);
  $("#EditStudentModal input[name='GiaVeLeNguoiLon']").val(GiaVeLeNguoiLon);
  $("#EditStudentModal input[name='GiaVeLeTreEm']").val(GiaVeLeTreEm);
  $("#EditStudentModal input[name='GiaVeDoanNguoiLon']").val(GiaVeDoanNguoiLon);
  $("#EditStudentModal input[name='GiaVeDoanTreEm']").val(GiaVeDoanTreEm);
  $("#EditStudentModal input[name='SoKhachDoanToiThieu']").val(SoKhachDoanToiThieu);
  $("#EditStudentModal input[name='SoDem']").val(SoDem);
  $("#EditStudentModal input[name='SoNgay']").val(SoNgay);
  $("#EditStudentModal input[name='MaCN']").val(MaCN);
  $("#EditStudentModal").modal("show");
});

$(".btn-delete").click(function (e) {
  var id = $(this).data("id");
  $("#DeleteStudentModal input[name='id']").val(id);
  $("#DeleteStudentModal").modal("show");
});