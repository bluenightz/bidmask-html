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
          <div class="row mt-sm mb-lg">
            <div class="col-lg-4">
              <div class="content-head">
                <h4>Bidmask</h4>
              </div>
              <p> <img src="http://placehold.it/400x250"></p>
              <p>
                3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง  <br>
                เขตวังทองหลาง กรุงเทพฯ 10310 <br>
                โทร. 02-276-5260, มือถือ 08-9665-3599  <br>
                โทรสาร 02-933-0969 <br>
                Email Address : email@email.com 
              </p>
              <p>
                <button class="btn btn-default" data-toggle="modal" data-target="#imageMap"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;ดูแผนที่</button>
                <button class="btn btn-default" data-toggle="modal" data-target="#googleMap"><i class="glyphicon glyphicon-globe"></i>&nbsp;ดู Google Map</button>
              </p>
            </div>
            <div class="col-lg-8">
              <div class="content-head">
                <h4>สอบถาม / เสนอแนะข้อคิดเห็น</h4>
              </div>
              <div class="col-xs-12 form-horizontal mt-sm">
                <div class="form-group">
                  <label class="control-label col-xs-3 text-right">หัวข้อ</label>
                  <div class="col-xs-12 col-sm-6">
                    <select class="form-control">
                      <option>--เลือกหัวข้อติดต่อ--</option>
                      <option>แจ้งปัญหาการใช้งาน</option>
                      <option>แนะนำ</option>
                      <option>อื่นๆ</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3 text-right">ชื่อ-นามสกุล</label>
                  <div class="col-xs-12 col-sm-6">
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3 text-right">อีเมล</label>
                  <div class="col-xs-12 col-sm-6">
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3 text-right">เบอร์โทรศัพท์</label>
                  <div class="col-xs-12 col-sm-6">
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3 text-right">รายละเอียด</label>
                  <div class="col-xs-12 col-sm-6">
                    <textarea class="form-control" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <input class="btn-primary btn" type="submit" value="ส่งข้อความ">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Google map box Modal -->
<div class="modal fade" id="googleMap" tabindex="-1" role="dialog" aria-labelledby="">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="">Google Map</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-12">
<p>3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง
    เขตวังทองหลาง กรุงเทพฯ 10310 <br>
    โทร. 02-276-5260, มือถือ 08-9665-3599
    โทรสาร 02-933-0969 <br>
    Email Address : email@email.com  <br>
    เวลาทำการ 9.00 - 17.00 น. หยุดทุกวันอังคาร</p>
<div id="googleMapBox" ></div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="imageMap" tabindex="-1" role="dialog" aria-labelledby="">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="">แผนที่</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-12 img-fill-width">
<p>3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง
    เขตวังทองหลาง กรุงเทพฯ 10310 <br>
    โทร. 02-276-5260, มือถือ 08-9665-3599
    โทรสาร 02-933-0969 <br>
    Email Address : email@email.com  <br>
    เวลาทำการ 9.00 - 17.00 น. หยุดทุกวันอังคาร</p>
    <p class="text-center"><img src="http://placehold.it/500x500" alt=""></p></div>
</div>
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