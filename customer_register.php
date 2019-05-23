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
            <div class="content-box-fullwidth">
              <div class="row">
                <div class="col-lg-3">
                  <div class="content-head">
                    <h4>Customer Register</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 form-horizontal mt-sm">
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right text-left-xs">Firstname</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right text-left-xs">Lastname</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right text-left-xs">Email</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right text-left-xs">Password</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 text-right text-left-xs">Confirm Password</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-md-8 col-md-offset-4">
                      <input class="btn-primary btn" type="submit" value="Submit">
                    </div>
                  </div>
                  <div class="row mt-lg">
                    <div class="col-xs-6 text-right"><img src="assets/img/btn_facebook.gif"></div>
                    <div class="col-xs-6 text-left"><img src="assets/img/btn_google.gif"></div>
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