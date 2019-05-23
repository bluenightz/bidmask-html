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
                  <div class="service-box active"><img class="about-img-2" src="http://placehold.it/100x100">
                    <div class="service-title">ขั้นตอนที่ 1<br>รายละเอียดทรัพย์สิน</div>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="service-box"><img class="about-img-2" src="http://placehold.it/100x100">
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
          <div class="row"><a class="btn-call-policy" href="#policy_before_post_asset" data-toggle="modal">อ่านเงื่อนไขและยอมรับก่อน Post คลิกที่นี่</a></div>
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
                    <h4 class="text_head--h4">Property Info</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">สถานะคุณกับทรัพย์</label>
                    <div class="col-xs-9">
                      <div class="radio col-xs-6 col-sm-3">
                        <label>
                          <input type="radio">Owner
                        </label>
                      </div>
                      <div class="radio col-xs-6 col-sm-3">
                        <label>
                          <input type="radio">ตัวแทน
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                
                
                <!-- start ประเภทการขาย-->
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Property For<br>ประเภทการขาย</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">ประเภทการขาย</label>
                    <div class="col-xs-9 col-sm-3">
                      <select class="form-control">
                        <option>กรุณาเลือก</option>
                        <option>ขายสด</option>
                        <option>ขายผ่อนชำระ</option>
                        <option>เช่า</option>
                        <option>หญิง</option>
                        <option>ร่วมทุน</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนงวดผ่อน</label>
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
                    <label class="control-label col-xs-3">ระยะเวลาผ่อน</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">เดือน</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">เงินมัดจำขั้นต่ำ</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                
                
                <!-- start สำหรับ กรณีที่เลือกร่วมทุน-->
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">Owner</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">%</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">Buyer</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">%</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">เงินสดที่ต้องการ</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">บาท</p>
                    </div>
                  </div>
                </div>
                <!-- end สำหรับ กรณีที่เลือกร่วมทุน-->
                
                
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                
                
                <!-- start property type group -->
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Property Type<br>ประเภททรัพย์สิน</h4>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-3 col-xs-12 mb-sm"><strong class="text_head--h5">รายทรัพย์/รายพื้นที่</strong>
                    <div class="pl">
                      <div class="radio">
                        <label>
                          <input type="radio">ที่ดินเปล่า
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">บ้านเดี่ยว/บ้านแฝด
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">อาคารพาณิชย์
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">โรงงาน
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">โรงแรม
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-xs-12 mb-sm"><strong class="text_head--h5">รายกิจการ-ร้านค้า</strong>
                    <div class="pl">
                      <div class="radio">
                        <label>
                          <input type="radio">ร้านอาหาร
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">ร้านกาแฟ
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">ที่จอดรถ
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">พื้นที่ค้าขายเป็นแผง/ห้อง
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-xs-12 mb-sm"><strong class="text_head--h5">รายธุรกิจ-กิจการ</strong>
                    <div class="pl">
                      <div class="radio">
                        <label>
                          <input type="radio">ธุรกิจโรงแรม
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">ธุรกิจปั๊มน้ำมัน
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-xs-12 mb-sm"><strong class="text_head--h5">ประมูลโครงการ</strong>
                    <div class="pl">
                      <div class="radio">
                        <label>
                          <input type="radio">โครงการหอพัก
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">โครงการหมู่บ้านจัดสรร
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio">โครงการคอนโด
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">หัวข้อประกาศ <a class="btn-help" href="#modal_help" data-toggle="modal"> <i class="fa fa-question-circle"></i></a></label>
                    <div class="col-xs-9 col-sm-4">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">รายละเอียด</label>
                    <div class="col-xs-9 col-sm-4">
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                
                
                <!-- start ข้อมูลราคา-->
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ข้อมูลราคา</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-xs-4">ราคาเปิดประมูล</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-xs-1">บาท</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4">ราคาตลาด</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-xs-1">บาท</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4">ราคาต่ำสุดที่ยอมขาย</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-xs-1">บาท</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4">ราคาสูงสุดที่ต้องการขาย</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-xs-1">บาท</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4">การเปิดเผยราคา</label>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>---------------</option>
                        </select>
                      </div>
                      <div class="col-xs-1">บาท</div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-xs-4">วันเริ่มต้นการประมูล</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4">วันสิ้นสุดการประมูล</label>
                      <div class="col-xs-6">
                        <input class="form-control" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">Location</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-6">
                    <label class="control-label col-xs-6">ชื่อโครงการ/ชื่อหมู่บ้าน/ชื่อกิจการ</label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-sm-6">
                    <label class="control-label col-xs-6">ชื่อเจ้าของโครงการ/ชื่อเจ้าของกิจการ</label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <label class="control-label col-sm-1 col-sm-wauto">เลขที่</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">จำนวนอาคาร</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">ชื่ออาคาร</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix mb-xs"></div>
                    <label class="control-label col-sm-1 col-sm-wauto">ชั้นที่</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-1 col-sm-wauto">โซน</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-1 col-sm-wauto">หมู่ที่</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix mb-xs"></div>
                    <label class="control-label col-sm-1 col-sm-wauto">ซอย</label>
                    <div class="col-sm-3">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-1 col-sm-wauto">ถนน</label>
                    <div class="col-sm-3">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group plr">
                    <div class="col-sm-2 col-xs-down-mb-xs">
                      <select class="form-control">
                        <option>จังหวัด</option>
                      </select>
                    </div>
                    <div class="col-sm-2 col-xs-down-mb-xs">
                      <select class="form-control">
                        <option>อำเภอ</option>
                      </select>
                    </div>
                    <div class="col-sm-2 col-xs-down-mb-xs">
                      <select class="form-control">
                        <option>ตำบล</option>
                      </select>
                    </div>
                    <label class="control-label col-sm-2">รหัสไปรษณีย์</label>
                    <div class="col-sm-2">
                      <input class="form-control input-small" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-4">
                    <label class="control-label col-xs-6">โฉนดเลขที่</label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-sm-4">
                    <label class="control-label col-xs-6">เลขที่ระวาง</label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-sm-4">
                    <label class="control-label col-xs-6">เลขที่ดิน</label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">แผนที่การเดินทาง</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="file">
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <p class="form-contro-static mt-xs"><img src="http://placehold.it/500x250?text=Map"></p>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">รูปภาพ</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="file">
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <p class="form-contro-static mt-xs"><img src="http://placehold.it/500x250?text=Map"></p>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">Google Map <a class="btn-help" href="#modal_help" data-toggle="modal"> <i class="fa fa-question-circle"></i></a></label>
                    <div class="col-sm-3">
                      <input class="form-control" type="text" placeholder="ตำแหน่งละติจูด">
                    </div>
                    <div class="col-sm-3">
                      <input class="form-control" type="text" placeholder="ตำแหน่งลองติจูด">
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <p class="form-contro-static mt-xs">
                        <div id="googleMap"><img src="http://placehold.it/500x250?text=Google Map"></div>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">Street View</label>
                    <div class="col-sm-6">
                      <p class="form-contro-static">
                        <div id="streetMap"><img src="http://placehold.it/500x250?text=StreetView"></div>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">Video</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="text" placeholder="Video URL">
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <p class="form-contro-static mt-xs">
                        <div id="videoFrame"><img src="http://placehold.it/500x250?text=Video"></div>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">ผังสี</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option>--------------</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-sm-2">
                      <button class="btn btn-default">Link</button><a class="btn-help" href="#modal_help" data-toggle="modal"> <i class="fa fa-question-circle"></i></a>
                    </div>
                  </div>
                </div>
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
    
    <div class="modal fade" id="modal_help">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Help Modal</h4>
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
</div>
</div>
</div>
</div>
    
    
    <!-- modal for read policy before post asset-->
    <div class="modal fade" id="policy_before_post_asset">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">สถานะของคุณกับทรัพย์</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3 course">
                  <h4 class="text_head--h4 text-center">Owner</h4>
                  <div class="course-img"><img src="http://placehold.it/400x300"></div>
                  <div class="minh-1 mt-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ad aspernatur, dolore, nesciunt incidunt</div><a class="readmore" href="#">Post</a>
                </div>
                
                
                <div class="col-sm-3 course">
                  <h4 class="text_head--h4 text-center">Agent</h4>
                  <div class="course-img"><img src="http://placehold.it/400x300"></div>
                  <div class="minh-1 mt-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ad aspernatur, dolore, nesciunt incidunt sint vitae magni officiis</div><a class="readmore" href="#">Post</a>
                </div>
                
                
                <div class="col-sm-3 course">
                  <h4 class="text_head--h4 text-center">FC</h4>
                  <div class="course-img"><img src="http://placehold.it/400x300"></div>
                  <div class="minh-1 mt-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ad aspernatur, dolore, nesciunt incidunt sint vitae magni officiis eligendi alias placeat,</div><a class="readmore" href="#">Post</a><a class="readmore readmore-orange" href="#">ซื้อสิทธิ์</a>
                </div>
                
                
                <div class="col-sm-3 course">
                  <h4 class="text_head--h4 text-center">SubArea</h4>
                  <div class="course-img"><img src="http://placehold.it/400x300"></div>
                  <div class="minh-1 mt-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ad aspernatur, dolore, nesciunt incidunt sint vitae magni officiis eligendi alias placeat, corporis</div><a class="readmore" href="#">Post</a><a class="readmore readmore-orange" href="#">ซื้อสิทธิ์</a>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
        <!--
        .modal-footer
          button(type="button", class="btn btn-default", data-dismiss="modal", aria-hidden="true") ปิด
          button(type="button", class="btn btn-primary") บันทึก
        -->
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
  </body>
</html>