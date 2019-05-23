<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- include basic css, meta-->
    <?php include_once('inc/basic-head-meta.php'); ?>
    <link type="text/css" rel="stylesheet" href="assets/js/owlcarousel/dist/assets/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="assets/js/owlcarousel/dist/assets/owl.theme.default.css">
  </head>
  <body>
    <!-- include top menu-->
    <?php include_once('inc/basic-mainnav_logo-left.php'); ?>
    <!-- start content-->
    <div class="container-fluid bgwhite">
      <div class="row">
        <div class="container">
          <div class="row mt-sm mb-lg">
            
            
            <!-- start left column-->
            <div class="col-md-3">
              
              
              <h4 class="text_head--h4 mb-sm"> <i class="fa fa-file-text-o"> </i> ประเภท</h4>
              <ul class="sidesubmenu">
                <li><a href="magazine.php">นิตยสาร</a></li>
                <li><a href="news.php">ข่าวสาร</a></li>
                <li><a href="article.php">บทความ</a></li>
                <li class="active"><a href="event.php">อีเวนท์</a></li>
                <li><a href="promotion.php">โปรโมชั่น</a></li>
              </ul>
            </div>
            <!-- end left column-->
            
            
            <!-- start right column-->
            <div class="col-md-9">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <!-- slideshow-->
                    <div class="owl-carousel owl-theme">
                      <div><img src="http://placehold.it/800x450/EAEAEA?text=slideshow_800x450"></div>
                      <div><img src="http://placehold.it/800x450/EAEAEA?text=slideshow_800x450"></div>
                      <div><img src="http://placehold.it/800x450/EAEAEA?text=slideshow_800x450"></div>
                    </div>
                  </div>
                </div>
                <div class="row mt-sm">
                  <div class="col-md-3">
                    <h4 class="text_head--h4 mb-sm">
                        อีเวนท์</h4>
                  </div>
                </div>
                <div class="row form form-horizontal">
                  <!-- start filter section-->
                  <div class="col-md-3 text-right">
                    <div class="form-group">
                      <label class="col-md-12 control-label">ค้นหาจาก</label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-1 text-center"> 
                    <div class="form-group">
                      <label class="control-label">ถึง</label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-2"><div class="filter-wrapper">
<select name="select-type" id="select-type" class="form-control">
<option value="">จังหวัด</option>
<option value="">กรุงเทพฯ</option>
<option value="">นนทบุรี</option>
</select>
</div>
                  </div>
                  <div class="col-md-2"><div class="filter-wrapper">
<select name="select-type" id="select-type" class="form-control">
<option value="">ประเภท</option>
<option value="">Guru</option>
<option value="">Tour</option>
<option value="">ทั้งหมด</option>
</select>
</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <col width="20%">
                      <col width="25%">
                      <col width="15%">
                      <col width="">
                      <col width="10%">
                      <thead>
                        <tr>
                          <th>ภาพอีเวนท์</th>
                          <th>วันที่</th>
                          <th>ปรเภท</th>
                          <th>ชื่ออีเวนท์</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg"></td>
                          <td>18/09/60 - 20/09/60</td>
                          <td><a href="#">Tour</a></td>
                          <td> <a href="news_detail.php">โครงการบ้านเดี่ยวศุภาลัย กาญจนาภิเษก</a></td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- end news, 1 item-->
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <div class="row mb-lg">
                  
                  
                  <!-- start pagination section-->
                  <ul class="pagination-list"><li><a href="#"><<</a></li>
<li><a href="#"><</a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">>></a></li>
<li><a href="#">></a></li>
                  </ul>
                  <!-- end pagination section-->
                  
                </div>
              </div>
            </div>
            <!-- end right column-->
            
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
    <script src="assets/js/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/news.js"></script>
  </body>
</html>