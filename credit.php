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
        
        
        <!-- start user nav-->
        <div class="profile__nav--section profile__nav--compact">
          <div class="container">
            <div class="col-xs-12">
              <ul class="profile__navbox text-center">
                <li class="profile__nav--img"><a class="profile__img" href="#"><img src="assets/img/avatar-user.jpg"></a><a class="profile__name" href="profile.php">
                    Firstname Lastname<br>Credit 20,000,000</a></li>
                <li class="profile__nav"><a href="asset_favourites.php">Asset</a></li>
                <li class="profile__nav"><a href="event_dashboard.php">Event</a></li>
                <li class="profile__nav"><a href="postasset.php">Post Asset</a></li>
                <li class="profile__nav"><a href="#">Commission</a></li>
                <li class="profile__nav"><a href="message.php">Message<span class="norti norti-primary">2</span></a></li>
                <li class="profile__nav"><a href="history.php">History</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end user nav-->
        
      </div>
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
                <li><a href="profile.php">Profile</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li class="active"><a href="credit.php">Credit</a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">รายละเอียดการเงิน</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 asset__price--other noborder">
                    <ul class="ml-xs">
                      <li><span class="text__title">วงเงินที่ได้<br><span>1,000,000 </span>บาท</span></li>
                      <li><span class="text__title">ยอดเงินที่ใช้<br><span>200,000 </span>บาท</span></li>
                      <li><span class="text__title">เงินประกัน<br><span>200,000 </span>บาท</span></li>
                      <li><span class="text__title">เครดิต<br><span>1,000,000 </span>บาท</span></li>
                    </ul>
                  </div>
                </div>
                <div class="divide-line mt-sm"></div>
                <div class="row mt-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ขั้นตอนการชำระเงิน</h4>
                  </div>
                </div>
                <form class="form form-horizontal">
                  <h5 class="text_head--h5">1. เลือกธนาคาร</h5>
                  <div class="row">
                    <div class="banklist ml-xs">
                      <div class="form-group">
                        <label class="col-xs-12 radio-line">
                          <input type="radio"><i class="thbanks thbanks-kbank" aria-hidden="true"></i><span>ธนาคารกสิกร เลขที่บัญชี 095-2-17170-6</span>
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 radio-line">
                          <input type="radio"><i class="thbanks thbanks-ktb" aria-hidden="true"></i><span>ธนาคารกรุงไทย เลขที่บัญชี 597-0-01103-7</span>
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 radio-line">
                          <input type="radio"><i class="thbanks thbanks-bbl" aria-hidden="true"></i><span>ธนาคารกรุงเทพ เลขที่บัญชี 232-4-06934-9</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <h5 class="text_head--h5 mt-sm">2. เลือกรูป (สลิป)</h5>
                  <div class="row">
                    <div class="form-group">
                      <label class="control-label col-sm-3">ภาพสลิป</label>
                      <div class="col-sm-4 col-xs-12">
                        <input class="form-control" type="file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">วันเวลาที่โอน</label>
                      <div class="col-sm-4 col-xs-12">
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">ธนาคารต้นทาง</label>
                      <div class="col-sm-4 col-xs-12">
                        <select class="form-control">
                          <option>---เลือกธนาคาร---</option>
                          <option>กสิกรไทย</option>
                          <option>ไทยพาณิชย์</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
                  </div>
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
    <script src="assets/js/profile.js"></script>
  </body>
</html>