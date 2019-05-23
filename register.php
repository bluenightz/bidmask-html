<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- include basic css, meta-->
    <?php include_once('inc/basic-head-meta.php'); ?>
  </head>
  <body>
    <!-- include top menu-->
    <?php include_once('inc/basic-mainnav_logo-left.php'); ?>
    <!-- start content-->
    <div class="container-fluid bgwhite">
      <div class="row">
        <div class="container why">
          <div class="row mt-lg mb-sm">
            <div class="col-xs-12 text-center">
              <h1 class="headstyle1">สมัครสมาชิก </h1>
            </div>
          </div>
          <div class="row mb-sm">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="mb-sm-2">กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วนเพื่อประโยชน์ของตัวท่านเอง <i class="fa fa-question-circle text-xs"></i></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="container-fluid basic-form">
                <div class="row basic-form-row">
                  <label class="col-md-4 form-label">ชื่อจริง</label>
                  <div class="col-md-8"><input type="text" class="basic-text form-control" id="" ></div>
                </div>
                <div class="row basic-form-row">
                  <label class="col-md-4 form-label">นามสกุล</label>
                  <div class="col-md-8"><input type="text" class="basic-text form-control" id="" ></div>
                </div>
                <div class="row basic-form-row">
                  <label class="col-md-4 form-label">อีเมล</label>
                  <div class="col-md-8"><input type="text" class="basic-text form-control" id="" ></div>
                </div>
                <div class="row basic-form-row">
                  <label class="col-md-4 form-label">รหัสผ่าน</label>
                  <div class="col-md-8"><input type="password" class="basic-text form-control" id="" ></div>
                </div>
                <div class="row basic-form-row">
                  <label class="col-md-4 form-label">ยืนยันรหัสผ่าน</label>
                  <div class="col-md-8"><input type="password" class="basic-text form-control" id="" ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-sm mb-lg">
            <div class="col-xs-12 text-center"><a href="#" type="submit" class="basic-btn btn btn-primary btn-lg">สมัครสมาชิก</a></div>
          </div>
          <div class="row mt-xs mb-lg">
            <div class="col-md-12 text-center social-login"><img src="assets/img/btn_facebook.gif"><img src="assets/img/btn_google.gif"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
  </body>
</html>