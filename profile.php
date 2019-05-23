<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- include basic css, meta-->
    <?php include_once('inc/basic-head-meta.php'); ?>
  </head>
  <body>
    <!-- include top menu-->
    <?php include_once('inc/basic-mainnav_logo-login.php'); ?>
    <!-- start content-->
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row mb-lg mt-xs">
            <div class="col-md-3">
              <div class="container-fluid mb-sm">
                <div class="row">
                  <div class="col-xs-6 textstyle-1"> <i class="fa fa-usd">  </i>วงเงิน</div>
                  <div class="col-xs-6 nopadr">
                    <div class="basic-bar" data-bar="10000000" data-bar-max="20000000"></div>
                  </div>
                  <div class="col-xs-12 nopadr text-right">10 K / 20 M</div>
                </div>
                <div class="row mt-xs-2">
                  <div class="col-xs-6 textstyle-1"> <i class="fa fa-usd"> </i>เงินประกัน</div>
                  <div class="col-xs-6 nopadr text-right">10,000 บาท</div>
                </div>
              </div>
              <ul class="sidesubmenu">
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="credit.php">Credit</a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <form class="form-horizontal container-fluid form-label-left">
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Your Image</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6 mb-sm">
                    <div class="post-img text-center"><img src="assets/img/avatar-user.jpg"></div>
                    <label class="control-label col-xs-12 text-left">Postname</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <div class="post-img text-center"><img src="assets/img/avatar-user.jpg"></div>
                    <label class="control-label col-xs-12 text-left">Bidname</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Profile</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">Firstname</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">Lastname</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">Email</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Address</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-8">
                    <label class="control-label col-xs-12 text-left">Address</label>
                    <div class="col-xs-12">
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">จังหวัด</label>
                    <div class="col-xs-12">
                      <select class="form-control">
                        <option>เลือกจังหวัด</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นนทบุรี</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label class="control-label col-xs-12 text-left">อำเภอ</label>
                    <div class="col-xs-12">
                      <select class="form-control">
                        <option>เลือกอำเภอ</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นนทบุรี</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">ตำบล</label>
                    <div class="col-xs-12">
                      <select class="form-control">
                        <option>เลือกตำบล</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นนทบุรี</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">รหัสไปรษณีย์</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">Phone</label>
                    <div class="col-xs-8">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-4">
                      <button class="btn btn-default" type="button">Submit</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label col-xs-12 text-left">OTP</label>
                    <div class="col-xs-8">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-4">
                      <button class="btn btn-default" type="button">Confirm</button>
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">Submit</a></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
    <script src="assets/js/profile.js"></script>
  </body>
</html>