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
            <div class="col-md-3">
              <ul class="sidesubmenu">
                <li class="active"><a href="asset_favourites.php">Favourites</a></li>
                <li><a href="asset_bidding.php">Bidding</a></li>
                <li><a href="asset_winner.php">Winner</a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row mb-sm">
                <div class="col-xs-12">
                  <h4 class="text_head--h4">Asset Favourites</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="table-responsive pos-relative asset-user">
                    <table class="table table-striped table-hover table-bordered">
                      <colgroup>
                        <col width="20%">
                        <col width="">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="5%">
                      </colgroup>
                      <thead>
                        <tr>
                          <th class="text-center">Assets Into</th>
                          <th>&nbsp;</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                          <th class="text-center">Alert</th>
                          <th class="text-center">Delete</th>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center">
                            <div class="asset-remain-day text-center text-red">Over Auction Time</div>
                          </td>
                          <td class="text-center">
                            <div class="text-center">-</div>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
                              Auction Date: 20 Aug <br>
                              Bid Deposit: 5,000 ฿ <br>
                              Bid Increment: 2,000 ฿ <br>
                              Strating Price: 6,000 ฿ <br>
                            </p>
                          </td>
                          <td class="text-center"><a class="btn btn-primary" href="#"> <i class="fa fa-sign-in"> </i>  Click to Join</a>
                            <div class="asset-remain-day text-center">Will Starting On: <span>5day</span></div>
                          </td>
                          <td class="text-center"><span class="label label-default text-sm">Cancel</span>
                          </td>
                          <td class="text-center">
                            <div class="form-group" style="width: 100px;">
                              <select class="form-control">
                                <option>-------</option>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><a class="fa fa-times-circle text-danger" href="#"></a></td>
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
    </div>
    <!-- end content-->
    <!-- include footer-->
    <?php include_once('inc/basic-footer.php'); ?>
    <script src="assets/js/profile.js"></script>
  </body>
</html>