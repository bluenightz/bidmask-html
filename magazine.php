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
                <li class="active"><a href="magazine.php">นิตยสาร</a></li>
                <li><a href="news.php">ข่าวสาร</a></li>
                <li><a href="article.php">บทความ</a></li>
                <li><a href="event.php">อีเวนท์</a></li>
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
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="text_head--h4 mb-sm"> <i class="fa fa-star"> </i> นิตยสารแนะนำ</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <col width="20%">
                      <col width="15%">
                      <col width="55%">
                      <col width="10%">
                      <thead>
                        <tr>
                          <th>ภาพนิตยสาร</th>
                          <th>หัวข้อนิตยสาร</th>
                          <th>รายละเอียด</th>
                          <th>วันที่</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="divide-line"></div>
                  </div>
                </div>
                <div class="row form form-horizontal mt-sm">
                  
                  
                  <div class="col-md-3">
                    <h4 class="text_head--h4 mb-sm">
                        ข่าวสาร</h4>
                  </div>
                  <!-- start filter section-->
                  <div class="col-md-6 text-right">
                    <div class="form-group">
                      <label class="col-md-12 control-label">ค้นหาจาก</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input class="form-control" type="text" placeholder="หัวข้อ/รายละเอียด">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <col width="20%">
                      <col width="15%">
                      <col width="55%">
                      <col width="10%">
                      <thead>
                        <tr>
                          <th>ภาพนิตยสาร</th>
                          <th>หัวข้อนิตยสาร</th>
                          <th>รายละเอียด</th>
                          <th>วันที่</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
                        </tr>
                        <!-- end news, 1 item-->
                        <!-- start news, 1 item-->
                        <tr>
                          <td><img src="assets/img/img-test.jpg">
                            <div class="text-center text-xs-2 mt-xs-2">เข้าชมแล้ว 1,420 ครั้ง</div>
                          </td>
                          <td><a href="#">โครงการศุภาลัย</a></td>
                          <td><a href="news_detail.php">โครงการศุภาลัย มีการปรับราคาบ้านเดี่ยวและทาวน์โฮมในตัวเมืองหลายแห่ง ทั้งนี้เพื่อตอบรับกระแสของความต้องการที่มีมากขึ้น</a></td>
                          <td>02/09/60</td>
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