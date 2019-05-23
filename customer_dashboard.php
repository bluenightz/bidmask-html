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
    <div class="container-fluid course-wrapper bg1 nomargin">
      <div class="row mt-sm">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <div class="content-box-fullwidth">
                <?php include_once('inc/user-nav.php'); ?>
                <div class="col-lg-9">
                  <div class="content-head">
                    <h4><i class="fa fa-plus"></i>  New Request</h4>
                  </div>
                  <div class="container-fluid">
                    <div class="col-xs-8 col-xs-offset-2">
                      <div class="container-fluid step-list">
                        <div class="row mb-lg">
                          <div class="col-lg-4">
                            <div class="service-box"><img class="about-img-2" src="http://placehold.it/300x300">
                              <div class="service-title">Input Owner Details</div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="service-box"><img class="about-img-2" src="http://placehold.it/300x300">
                              <div class="service-title">Input Residential Address</div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="service-box"><img class="about-img-2" src="http://placehold.it/300x300">
                              <div class="service-title">Select Price Model/Contract Duration</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 form-horizontal">
                      <div class="form-group">
                        <label class="control-label col-xs-3 text-right">Field 1</label>
                        <div class="col-xs-12 col-sm-6">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3 text-right">Field 2</label>
                        <div class="col-xs-12 col-sm-6">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3 text-right">Field 3</label>
                        <div class="col-xs-12 col-sm-6">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3 text-right">Field 4</label>
                        <div class="col-xs-12 col-sm-6">
                          <textarea class="form-control" cols="30" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                          <input class="btn-primary btn" type="submit" value="Next">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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