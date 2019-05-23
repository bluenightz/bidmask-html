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
                  <div class="service-box active"><img class="about-img-2" src="http://placehold.it/100x100">
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
                    <h4 class="text_head--h4">เส้นทางการจราจร</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group plr">
                    <div class="checkbox col-sm-3">
                      <label>
                        <input type="checkbox">ใกล้ทางด่วน
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label>
                        <input type="checkbox">ใกล้ถนนสายหลัก
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label>
                        <input type="checkbox">ใกล้ถนนใหญ่
                      </label>
                    </div>
                    <div class="checkbox col-sm-3">
                      <label>
                        <input type="checkbox">ทางเข้าออก 2 ทาง
                      </label>
                    </div>
                  </div>
                </div>
                
                
                <!-- start ถนนหน้าพื้นที่-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ถนนหน้าพื้นที่</h4>
                  </div>
                </div>
                
                
                <!-- start ถนนทางเข้าออก-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ถนนทางเข้าออก</h4>
                  </div>
                </div>
                
                
                <!-- start ระยะห่างจากถนนใหญ่-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ระยะห่างจากถนนใหญ่</h4>
                  </div>
                </div>
                
                
                <!-- start ใกล้ชุมชนและแหล่งงาน-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ใกล้ชุมชนและแหล่งงาน</h4>
                  </div>
                </div>
                
                
                <!-- start สถานที่ใกล้เคียง-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">สถานที่ใกล้เคียง</h4>
                  </div>
                </div>
                
                
                <!-- start ใกล้สถานีรถไฟฟ้า-->
                <div class="divide-line mb-sm"></div>
                <div class="row mb-sm">
                  <div class="col-xs-12">
                    <h4 class="text_head--h4">ใกล้สถานีรถไฟฟ้า</h4>
                  </div>
                </div>
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