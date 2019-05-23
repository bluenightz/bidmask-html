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
              <h1 class="headstyle1">ลืมรหัสผ่าน</h1>
            </div>
          </div>
          <div class="row mb-sm">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="mb-sm-2">กรอกอีเมลที่ใช้ในการสมัคร เพื่อรับอีเมลตั้งรหัสผ่านใหม่</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="container-fluid">
                <div class="row mb-lg">
                  <div class="col-md-8"><input type="text" class="basic-text form-control" ></div>
                  <div class="col-md-4"><a href="#" type="submit" class="basic-btn btn btn-primary btn-xs"><i class="fa fa-lock"></i> ตั้งรหัสผ่านใหม่</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
  </body>
</html>