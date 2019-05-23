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
    </div>
    <div class="container-fluid mb-lg mt-xs">
      <div class="row">
        <div class="container">
          <div class="row">
            
            
            <!-- start step-->
            <div class="container-fluid step-list">
              <div class="row mb-xs">
                <div class="col-sm-3 col-xs-6">
                  <div class="service-box"><img class="about-img-2" src="http://placehold.it/100x100">
                    <div class="service-title">ขั้นตอนที่ 1<br>รายละเอียดทรัพย์สิน</div>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="service-box active"><img class="about-img-2" src="http://placehold.it/100x100">
                    <div class="service-title">ขั้นตอนที่ 2<br>รายละเอียดทรัพย์สิน</div>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="service-box"><img class="about-img-2" src="http://placehold.it/100x100">
                    <div class="service-title">ขั้นตอนที่ 3<br>แผนที่, สภาพแวดล้อม</div>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="service-box"><img class="about-img-2" src="http://placehold.it/100x100">
                    <div class="service-title">ขั้นตอนที่ 4<br>ข้อมูลพื้นที่</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end step-->
            
            
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              
              
              <!-- start profile box-->
              <div class="container-fluid postasset_profile mb-xs">
                <div class="row">
                  <div class="col-xs-6 col-sm-4 postasset_profile_img"><img src="assets/img/avatar-user.jpg"></div>
                  <div class="col-xs-6 col-sm-4">
                    <h4 class="text_head--h4">Firstname Lastname <br></h4><strong class="inline-label">สถานภาพ</strong>SubArea <br><strong class="inline-label">พื้นที่</strong> Lorem ipsum dolor sit amet. <br><strong class="inline-label">จังหวัด</strong>กรุงเทพมหานคร <br>
                  </div>
                  <div class="col-xs-12 col-sm-4"><strong class="postasset_completed">ความสมบูรณ์ของข้อมูล<br></strong><strong class="postasset_completed_number">20%</strong></div>
                </div>
              </div>
              <!-- end profile box-->
              
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal container-fluid form-label-left">
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">รายละเอียด</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <div class="col-xs-9">
                      <div class="radio col-xs-6 col-sm-3">
                        <label>
                          <input type="radio">ห้ามรบกวน
                        </label>
                      </div>
                      <div class="radio col-xs-6 col-sm-4">
                        <label>
                          <input type="radio">มีผู้อยู่อาศัยห้ามรบกวน
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                
                
                <!-- start checkbox zone 1-->
                <div class="row">
                  <div class="form-group plr">
                    <div class="checkbox col-sm-3">
                      <label class="checkbox_with_number">
                        <input type="checkbox">จำนวนชั้น
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label class="checkbox_with_number">
                        <input type="checkbox">อยู่ชั้นที่
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label class="checkbox_with_number">
                        <input type="checkbox">อายุทรัพย์
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ระยะเวลาที่มีชื่อยู่ในทะเบียนบ้าน
                        <input class="form-control" type="text">
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- start checkbox zone 2-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">จำนวนห้อง</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="clearfix"></div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องนอนชั้นบน
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องนอนชั้นล่าง
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องอื่นๆ
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องน้ำชั้นบน
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="clearfix"></div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องน้ำชั้นล่าง
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">เครื่องปรับอากาศ
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ที่จอดรถ
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ห้องแม่บ้าน
                        <input class="form-control" type="text">
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- รูปแบบห้อง-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">รูปแบบห้อง </h4>
                  </div>
                </div>
                
                
                <!-- start checkbox zone 3-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ค่าใช้จ่ายอื่นๆ </h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="clearfix"></div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ค่าส่วนกลาง (บาท/เดือน)
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ค่าไฟ (บาท/Unit)
                        <input class="form-control" type="text">
                      </label>
                    </div>
                    <div class="checkbox col-sm-3 mb-sm">
                      <label class="checkbox_with_number">
                        <input type="checkbox">ค่าน้ำ (บาท/Unit)
                        <input class="form-control" type="text">
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- start ภาระผูกพัน-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ภาระผูกพัน</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">ภาระหนี้สิน</label>
                    <div class="col-sm-3">
                      <select class="form-control">
                        <option>ปลอดจำนอง</option>
                        <option>จำนอง</option>
                        <option>ขายฝาก</option>
                        <option>สัญญาลอย</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                
                <!-- start กรณีเลือกจำนอง-->
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ธนาคาร</label>
                    <div class="col-xs-7 col-sm-2">
                      <select class="form-control">
                        <option>---------------</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนเงิน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ระยะเวลาไถ่ถอน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระ</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">งวด</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระค่างวดทั้งหมด</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">สัญญา</label>
                    <div class="col-xs-7 col-sm-3">
                      <input class="form-control" type="file">
                    </div>
                  </div>
                </div>
                <!-- end กรณีเลือกจำนอง-->
                
                <!-- start กรณีเลือกขายฝาก-->
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ชื่อ-นามสกุล</label>
                    <div class="col-xs-7 col-sm-3">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนเงิน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ระยะเวลาไถ่ถอน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระ</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">งวด</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระค่างวดทั้งหมด</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">สัญญา</label>
                    <div class="col-xs-7 col-sm-3">
                      <input class="form-control" type="file">
                    </div>
                  </div>
                </div>
                <!-- end กรณีเลือกขายฝาก-->
                
                <!-- start กรณีเลือกสัญญาลอย-->
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ชื่อ-นามสกุล</label>
                    <div class="col-xs-7 col-sm-3">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนเงิน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ระยะเวลาไถ่ถอน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระ</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">งวด</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดค้างชำระค่างวดทั้งหมด</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">สัญญา</label>
                    <div class="col-xs-7 col-sm-3">
                      <input class="form-control" type="file">
                    </div>
                  </div>
                </div>
                <!-- end กรณีเลือกสัญญาลอย-->
                
                
                <div class="divide-line mb-sm"></div>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
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
  </body>
</html>