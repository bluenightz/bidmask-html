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
              <h1 class="headstyle1">เข้าสู่ระบบ</h1>
            </div>
          </div>
          <div class="row mb-sm">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="mb-sm-2">กรุณาเก็บชื่อและรหัสสำหรับเข้าบัญชี BidMask.com ไว้ในที่ปลอดภัย เว็บไซต์ BidMask.com เป็นตัวกลางในการประมูลเพียงอย่างเดียว</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6"><input type="text" class="basic-text form-control" id="" placeholder="ชื่อผู้ใช้"></div>
                  <div class="col-md-6"><input type="password" class="basic-text form-control" id="" value="1234"></div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-1">
                    <label class="checkbox">
                      <input type="checkbox"><span>จำฉันไว้ในระบบ</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-sm">
            <div class="col-xs-12 text-center"><a href="profile.php" type="submit" class="basic-btn btn btn-primary btn-lg"><i class="fa fa-lock"></i> เข้าสู่ระบบ</a></div>
          </div>
          <div class="row mt-xs">
            <div class="col-xs-12 text-center login-action"><a href="register.php"><i class="fa fa-user"></i> สมัครสมาชิก </a><span>| </span><a href="forgot_password.php"><i class="fa fa-lock"></i> ลืมรหัสผ่าน </a></div>
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