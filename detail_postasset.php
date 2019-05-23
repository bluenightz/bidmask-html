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
            <div class="col-md-5 mb-sm">
              <div class="container-fluid">
                                 
                
                <div class="row">
                  <div class="col-md-12">
                    
                    
                    <!-- start image,video section-->
                    <div class="asset_gallery">
                      <div class="viewer_img"><img src="http://placehold.it/600x410"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="container-fluid">
                <div class="row row-underline">
                  <div class="col-md-12">
                    <h1 class="text_head--h1">รายละเอียดสิทธิ์</h1>
                  </div>
                </div>
                <div class="row">
                  <!-- start asset content section-->
                  <div class="col-md-12">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui alias voluptatem error veritatis natus, facere, eligendi labore et velit dolor accusantium deleniti adipisci, totam voluptates architecto commodi pariatur corporis? Consequatur ab numquam dolores modi odit laudantium id, perferendis qui praesentium nam! Dolore omnis repellendus sunt rerum at nisi, laudantium tenetur neque minus facere incidunt</p>
                  </div>
                </div>
                <div class="row list__assetHilight mt-xs">
                  <div class="col-md-12 text-right">
                    <div class="input__group"><a class="input__increase" href="#buy-postasset-modal" data-toggle="modal"><i class="fa fa-shopping-cart"> </i> ซื้อเลย</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="buy-postasset-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">ซื้อสิทธิ์</h4>
          </div>
          <div class="modal-body">
            <form class="form form-horizontal">
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 control-label">ชื่อ-นามสกุล</label>
                <div class="col-xs-12 col-sm-9">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 control-label">สิทธิ์</label>
                <div class="col-xs-12 col-sm-6">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 control-label">จำนวนเงิน</label>
                <div class="col-xs-10 col-sm-6">
                  <input class="form-control" type="text">
                </div>
                <p class="form-control-static col-xs-2">บาท</p>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 control-label">พื้นที่</label>
                <div class="col-xs-12 col-sm-6">
                  <select class="form-control">
                    <option>-------------</option>
                    <option>-------------</option>
                    <option>-------------</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 control-label">จังหวัด</label>
                <div class="col-xs-12 col-sm-6">
                  <select class="form-control">
                    <option>---เลือกจังหวัด---</option>
                    <option>กรุงเทพฯ</option>
                    <option>นนทบุรี</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9"> 
                  <input type="checkbox">  ยอมรับ <br><br><a href="policy_postasset.php" target="_blank">รายละเอียดเงื่อนไข</a>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal" aria-hidden="true">ยกเลิก</button>
            <button class="btn btn-primary" type="button">บันทึก</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
  </body>
</html>