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
            <div class="col-md-12">
              <div class="row mb-sm">
                <div class="col-xs-6">
                  <h4 class="text_head--h4">Post Asset</h4>
                </div>
                <div class="col-xs-6 text-right"><a class="btn btn-primary" href="#"><i class="fa fa-plus"></i>  Add Assets</a></div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="table-responsive pos-relative asset-user">
                    <table class="table table-striped table-hover table-bordered">
                      <colgroup>
                        <col width="20%">
                        <col width="">
                        <col width="">
                        <col width="10%">
                        <col width="10%">
                        <col width="5%">
                        <col width="">
                      </colgroup>
                      <thead>
                        <tr>
                          <th class="text-center">Assets Into</th>
                          <th>&nbsp;</th>
                          <th class="text-center">Date</th>
                          <th class="text-center">Buyer Amount</th>
                          <th class="text-center">Action</th>
                          <th class="text-center">5P</th>
                          <th class="text-center">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center">
                            <div class="text-center">Delay 31 Aug</div>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                        <tr>
                          <td><a class="asset_img" href="#"><img src="assets/img/img-test.jpg"><span> <i class="fa fa-sign-in"> </i>  ดูรายละเอียด</span></a></td>
                          <td>
                            <h4 class="text_head--h4"> <a href="#">Centara Condo</a></h4>
                            <p class="text_desc">
                              20/7 Bangsue, Bangkok. <br>
                              Item#: E5641B-1000 <br>
                              Type: Condo
                            </p>
                            <h4 class="text_head--h4"> <a href="#">Auction Info</a></h4>
                            <p class="text_desc">
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td>
                            Start: 20 Aug 2017 <br>
                            End: 22 Aug 2017
                          </td>
                          <td class="text-center"><i class="fa fa-user"></i>  61 People</td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center"><span class="text-p">4P</span></td>
                          <td class="text-center asset-user-action"><a href="#"><i class="fa fa-pencil"></i>  แก้ไข</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-calendar"></i>  เลื่อน</a><a href="#note-modal" data-toggle="modal"> <i class="fa fa-times"></i>  ยกเลิก</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <input id="ui-guide" type="checkbox">
                    <label class="ui-guide" for="ui-guide"><span><i class="fa fa-arrow-left"></i>เลื่อนเพื่อดูเพิ่มเติม<i class="fa fa-arrow-right"></i></span></label>
                  </div>
                </div>
              </div>
              
              
              <div class="row mt-sm">
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
        </div>
      </div>
    </div><div class="modal fade" id="note-modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">หมายเหตุในกรณีที่ยกเลิก/เลื่อน</h4>
</div>
<div class="modal-body">
    <form class="form form-horizontal">
      <div class="form-group">
        <div class="col-xs-12">
          <textarea class="form-control" rows="5"></textarea>
        </div>
      </div>
    </form></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
<button type="button" class="btn btn-primary">บันทึก</button>
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