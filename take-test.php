<?php
$active = 'ltests';
include 'layout/header.php';

//if(isset($_GET['cid'])){
//    $cid = $_GET['cid'];
//}
$_SESSION['current_page']=$_SERVER['REQUEST_URI'];


?>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
<!--            <div class="col-md-2"></div>-->
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> TEST PAGE</h4>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SEND MESSAGE ?');" >

                     <div class="form-group">
                        <div class="form-label">1. Quetion Details</div>
                        <div class="custom-controls-stacked">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option1">
                                        <span class="custom-control-label">Option 1</span>
                                      </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option2">
                                        <span class="custom-control-label">Option 2</span>
                                      </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option3">
                                        <span class="custom-control-label">Option 3</span>
                                      </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option4">
                                        <span class="custom-control-label">Option 4</span>
                                      </label>
                                </div>
                            </div>
                        </div>
                      </div>

                    <div class="form-footer" style="border-top:1px solid #eee;">
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <button type="submit" name="sendmessage" class="btn btn-primary btn-block">
                                  FINISH & SUBMIT <i class="fe fe-file-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
