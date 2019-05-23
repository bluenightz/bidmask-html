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
                  <div class="service-box active"><img class="about-img-2" src="http://placehold.it/100x100">
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
                    <h4 class="text_head--h4">ข้อมูลพื้นที่</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="checkbox col-sm-12">
                      <label>
                        <input type="checkbox">ในกรณีที่ทำการรังวัดพื้นที่จริงไม่ตรงกับเอกสาร การจ่ายชำระถูกคำนวณตามพื้นที่ได้ทำการรังวัดล่าสุด
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- โฉนด-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">โฉนด</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="radio col-sm-6">
                      <label>
                        <input type="radio">มีโฉนด/เอกสารสิทธิ์แสดงความเป็นเจ้าของ
                        <select class="form-control">
                          <option>ประเภท</option>
                          <option>-------------</option>
                        </select>
                      </label>
                    </div>
                    <div class="radio col-sm-6">
                      <label>
                        <input type="radio">ไม่มีโฉนด
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- ตาราง-->
                <div class="row">
                  <div class="col-xs-12">
                    <table class="table table-striped table-hover table-bordered">
                      <thead class="text-center">
                        <tr>
                          <th rowspan="2">ลำดับ</th>
                          <th rowspan="2">โฉนดเลขที่</th>
                          <th rowspan="2">เลขที่ระวาง</th>
                          <th rowspan="2">เลขที่ดิน</th>
                          <th colspan="4">ขนาดพื้นที่</th>
                          <th colspan="3">รูปพื้นที่</th>
                          <th colspan="4">พื้นที่สิ่งปลูกสร้าง</th>
                          <th rowspan="2">จำนวนปีที่ถือครอง</th>
                          <th rowspan="2">ระยะเวลาที่มีชื่ออยู่ในทะเบียน</th>
                        </tr>
                        <tr>
                          <th>ไร่</th>
                          <th>งาน</th>
                          <th>ตรว.</th>
                          <th>รวม​ (ตรว.)</th>
                          <th>รูปพื้นที่</th>
                          <th>กว้าง</th>
                          <th>ยาว</th>
                          <th>กว้าง</th>
                          <th>ยาว </th>
                          <th>ตร.ม.</th>
                          <th>จำนวนชั้น</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                
                
                <!-- สรุป-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">สรุป</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">จำนวนโฉนดที่คุณมี</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">โฉนด</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">รวมพื้นที่</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">ตร.ว.</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-xs-3">รวมพื้นที่สิ่งปลูกสร้าง</label>
                    <div class="col-xs-7 col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-1">
                      <p class="form-control-static">ตร.ม.</p>
                    </div>
                  </div>
                </div>
                
                
                <div class="row mb-sm mt-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ฟอร์มที่พื้นที่</h4>
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
                
                
                <div class="row mb-sm mt-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ขนาดพื้นที่</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="ไร่">
                    </div>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="งาน">
                    </div>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="ตร.ว.">
                    </div>
                    <div class="form-control-static col-sm-1 col-sm-wauto">=</div>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <div class="form-control-static col-sm-1 col-sm-wauto">ไร่</div>
                  </div>
                  <div class="form-group plr">
                    <label class="control-label col-sm-2 col-sm-wauto">รูปพื้นที่</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option>----------</option>
                      </select>
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">กว้าง</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="เมตร">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">ยาว</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="เมตร">
                    </div>
                  </div>
                </div>
                
                
                <div class="row mb-sm mt-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">พื้นที่สิ่งปลูกสร้าง</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <label class="control-label col-sm-2 col-sm-wauto">กว้าง</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="เมตร">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">ยาว</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="เมตร">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">จำนวนชั้น</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">พื้นที่ใช้สอย</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text" placeholder="ตร.ม.">
                    </div>
                  </div>
                  <div class="form-group plr">
                    <label class="control-label col-sm-2 col-sm-wauto">จำนวนปีที่ถือครอง</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option>----------</option>
                      </select>
                    </div>
                    <label class="control-label col-sm-2 col-sm-wauto">วันเริ่มถือครอง</label>
                    <div class="col-sm-2">
                      <input class="form-control" type="text">
                    </div>
                    <label class="control-label col-sm-2">ระยะเวลาที่มีชื่ออยู่ในทะเบียนบ้าน</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option>----------</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="form-group col-sm-12">
                    <div class="col-xs-12 text-right"><a href="#" type="submit" class="basic-btn btn btn-primary">บันทึก</a></div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                
                
                <!-- start property type group -->
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">เอกสารสิทธิ์</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-4">
                    <label class="control-label col-xs-6">โฉนดเลขที่ </label>
                    <div class="col-xs-6">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                
                
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ประเภทเจ้าของ</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="radio col-sm-6">
                      <label>
                        <input type="radio">บุคคลธรรมดา
                      </label>
                    </div>
                  </div>
                  <div class="container-fluid pl-xs">
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">ชื่อ-นามสกุล</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">เบอร์โทร</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">Line</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">บัตรประชาชนเจ้าของทรัพย์</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">บัตรประชาชนผู้มีสิทธิ์ใช้พื้นที่</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">สัญญาเช่า/เซ้งทรัพย์</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">หนังสือมอบอำนาจ/สัญญาตัวแทน/หนังสือแต่งตั้งผู้จัดการมรดก</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
                        <div class="clearfix"></div>
                        <label class="control-label col-sm-2 col-sm-wauto">วันที่หมดสัญญา</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="row mt-sm">
                  <div class="form-group plr">
                    <div class="radio col-sm-6">
                      <label>
                        <input type="radio">บริษัท
                      </label>
                    </div>
                  </div>
                  <div class="container-fluid pl-xs">
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">ชื่อบริษัท</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">เบอร์โทร</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">Line</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">หนังสือรับรองบริษัท</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="row mt-sm">
                  <div class="form-group plr">
                    <div class="radio col-sm-6">
                      <label>
                        <input type="radio">ทรัพย์ธนาคาร ชื่อธนาคาร
                      </label>
                    </div>
                  </div>
                  <div class="container-fluid pl-xs">
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">ชื่อธนาคาร</label>
                        <div class="col-sm-2">
                          <select class="form-control">
                            <option>-------------</option>
                          </select>
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">รหัสทรัพย์</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">เบอร์โทร</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group plr">
                        <label class="control-label col-sm-2 col-sm-wauto">Line</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text">
                        </div>
                        <label class="control-label col-sm-2 col-sm-wauto">หนังสือรับรองบริษัท</label>
                        <div class="col-sm-3">
                          <input class="form-control" type="file">
                        </div>
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
                
                
                <!-- start เงื่อนไขการเช่า/เซ้ง-->
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">เงื่อนไขการเช่า/เซ้ง</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">ลักษณะสัญญา</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="radio">
                      <label>
                        <input type="radio">ทำสัญญากับเจ้าของโดยตรง
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio">ทำสัญญาเช่าช่วง
                      </label>
                      <select class="form-control select-xs">
                        <option>การจ่ายชำระ</option>
                        <option>--------------</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">เงินคำ้ประกันการเช่า</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="radio">
                      <label class="col-xs-4 control-label">
                        <input type="radio">จำนวน
                      </label>
                      <div class="col-xs-6 col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-control-static">เดือน</div>
                    </div>
                    <div class="radio">
                      <label class="col-xs-4 control-label">
                        <input type="radio">จำนวนเงิน
                      </label>
                      <div class="col-xs-6 col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-control-static">บาท</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">ค่าเช่าล่วงหน้า</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="radio">
                      <label class="col-xs-4 control-label">
                        <input type="radio">จำนวน
                      </label>
                      <div class="col-xs-6 col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-control-static">เดือน</div>
                    </div>
                    <div class="radio">
                      <label class="col-xs-4 control-label">
                        <input type="radio">จำนวนเงิน
                      </label>
                      <div class="col-xs-6 col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-control-static">บาท</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">เงินกินเปล่า</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="radio">
                      <label class="col-xs-12 control-label">
                        <input type="radio">ไม่มีเงินกินเปล่า
                      </label>
                    </div>
                    <div class="radio">
                      <label class="col-xs-4 control-label">
                        <input type="radio">มีเงินกินเปล่า
                      </label>
                      <div class="col-xs-6 col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-control-static">บาท</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-12">ระยะเวลาตามสัญญาเช่าคงเหลือ</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="form-group">
                      <div class="col-sm-3">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-sm-2 form-control-static">เดือน</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label class="control-label col-sm-3">อายุสัญญา</label>
                  </div>
                </div>
                <div class="row mb-sm">
                  <div class="col-sm-9 pl-xs">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">วันที่เริ่มต้นสัญญา</label>
                      <div class="col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">วันที่สิ้นสุดสัญญา</label>
                      <div class="col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">ระยะเวลาตามสัญญาเช่าคงเหลือ</label>
                      <div class="col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-sm-2 form-control-static">เดือน</div>
                    </div>
                  </div>
                </div>
                <div class="divide-line mb-sm"></div>
                <!-- การส่งมอบทรัพย์-->
                
                
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">การส่งมอบทรัพย์</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์ได้ทันที ณ วันโอนสิทธิ์เช่า/เซ้ง
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 7 วัน
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 15 วัน
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 30 วัน
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 60 วัน
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 90 วัน
                      </label>
                    </div>
                    <div class="radio col-sm-12">
                      <label>
                        <input type="radio">พร้อมส่งมอบทรัพย์หลังวันโอนสิทธิ์เช่า/เซ้งไม่เกิน 180 วัน
                      </label>
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
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
  </body>
</html>