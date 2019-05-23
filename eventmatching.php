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
        <div class="container">
          <div class="row mt-sm">
            <div class="col-xs-12">
              <ul class="breadcum">
                <li><a href="#">หน้าหลัก</a></li>
                <li>></li>
                <li><a href="#">อีเวนท์</a></li>
                <li>></li>
                <li><a href="#">จองบูทเมืองทองธานี</a></li>
              </ul>
            </div>
          </div>
          <div class="row mt-xs">
            <div class="col-md-5 mb-sm">
              <div class="container-fluid">
                                 
                
                <div class="row">
                  <div class="col-md-12">
                    
                    
                    <!-- start image,video section-->
                    <div class="asset_gallery">
                      <div class="viewer_img"><img src="http://placehold.it/600x410">
                        <div class="btn-event-group"><a class="btn-eventtour" href="#"> <i class="fa fa-image"> </i> รูปภาพ</a><a class="btn-eventmatching" href="#"><i class="fa fa-play"> </i> วีดีโอ</a></div>
                      </div>
                    </div>
                    <!-- end image,video section-->
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="container-fluid">
                <div class="row row-underline">
                  <div class="col-md-12">
                    <h1 class="text_head--h1">จองบูทเมืองทองธานี<i class="fa fa-star-o pull-right icon-favourite"></i></h1>
                  </div>
                </div>
                <div class="row">
                  <!-- start asset content section-->
                  <div class="col-md-12">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui alias voluptatem error veritatis natus, facere, eligendi labore et velit dolor accusantium deleniti adipisci, totam voluptates architecto commodi pariatur corporis? Consequatur ab numquam dolores modi odit laudantium id, perferendis qui praesentium nam! Dolore omnis repellendus sunt rerum at nisi, laudantium tenetur neque minus facere incidunt</p>
                  </div>
                </div>
                <div class="row mt-xs">
                  <div class="col-md-12">
                    <h4 class="text_head--h4">รูปผังบูท</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center"><img src="http://placehold.it/600x350"></div>
                </div>
                <div class="row mt-xs">
                  <div class="col-md-12">
                    <h4 class="text_head--h4">ตำแหน่งบูทที่จอง</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="booth__list">
                      <ul>
                        <li>
                          <label>
                            <input type="checkbox" value="A0"><span> A0</span>
                          </label>
                        </li>
                        <li class="disabled">
                          <label>
                            <input type="checkbox" checked readonly disabled value="A1"><span>A1</span>
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" value="A2"><span> A2</span>
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" value="A3"><span> A3</span>
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" value="A4"><span> A4</span>
                          </label>
                        </li>
                        <li class="disabled">
                          <label>
                            <input type="checkbox" checked readonly disabled value="A5"><span>A5</span>
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" value="A6"><span> A6</span>
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" value="A7"><span> A7</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row mb-lg mt-xs">
                  <div class="col-md-12 text-center"><a class="input__increase" href="#booking-modal" data-toggle="modal">จองบูทที่เลือก</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- confirm popup box-->
    <div class="modal fade" id="booking-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">จองบูท</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="form form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right">ชื่อ</label>
                    <div class="col-md-8 form-control-static">นามสกุล</div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right">ตำแหน่งที่เลือก</label>
                    <div class="col-md-8 form-control-static">A2, A4, A7</div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right">วันที่จัดงาน</label>
                    <div class="col-md-8 form-control-static">25/09/60</div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right">ค่าจองบูท</label>
                    <div class="col-md-8 form-control-static">1,0000 บาท</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal" aria-hidden="true">ปิด</button>
            <button class="btn btn-primary" type="button">ชำระเงิน</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
    <script src="assets/js/eventmatching.js"></script>
  </body>
</html>