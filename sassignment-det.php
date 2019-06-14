<?php
$active = 'ltests';
include 'layout/header.php';

if(isset($_GET['aid'])){
    $aid = $_GET['aid'];
}
//get assignment details...
$assigndet = select("SELECT * FROM assignment WHERE asID='$aid'");
foreach($assigndet as $assignrow){
    //get course details..
    $cnm = select("SELECT * FROM courses WHERE cID='".$assignrow['cID']."'");
    foreach($cnm as $cnmrow){}
}

//$_SESSION['current_page']=$_SERVER['REQUEST_URI'];

?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
               <a class="btn btn-primary" href="javascript:history.back()">
                   <i class="fe fe-arrow-left mr-2"></i>Go back
               </a>
           <?php echo strtoupper($cnmrow['courseName']);?> - ASSIGNMENT
          </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if($error){ ?>
                <div class="alert alert-icon alert-danger" data-auto-dismiss role="alert">
                    <button type="button" class="close" data-dismiss="alert"></button>
                  <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> <?php echo $error;?>
                </div>
                <?php } ?>
                <?php if($success){ ?>
                <div class="alert alert-icon alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert"></button>
                  <i class="fe fe-check mr-2" aria-hidden="true"></i> <?php echo $success;?>
                </div>
                <?php } ?>
                <div class="row">

                    <!--====================  START COURSE CONTENT PANEL =================-->
                    <div class="col-md-7">
                        <div class="card">
                          <div class="card-status card-status-left bg-blue"></div>
                          <div class="card-header">
                            <h3 class="card-title">ASSIGNMENT QUESTIONS PANEL</h3>
                          </div>
                          <div class="card-body">

                              <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th><i class="fe fe-file-text"></i> Questions</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allTest = select("SELECT * FROM assignment WHERE asID='$aid'");
                                            if($allTest){
                                                foreach($allTest as $qstnrow){
                                                    $type = $qstnrow['type'];
                                            ?>
                                            <tr>
                                                <?php if($type == 'file'){?>
                                                <td><a target="_blank" href="<?php echo $qstnrow['question'];?>"> VIEW QUESTION </a></td>
                                                <?php }?>

                                                <?php if($type == 'text'){?>
                                                <td><?php echo $qstnrow['question'];?></td>
                                                <?php }?>

                                            </tr>
                                            <?php }}else{?>
                                            <tr>
                                                <td colspan="3"> No Questions Available.</td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>

                <div class="col-md-5">
                 <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> SUBMIT ANSWER</h4>
                    </div>
                    <div class="card-body">
                      <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE TEST ?');" >
                          <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <label class="form-label"><i class="fe fe-upload"></i> Upload Answer</label>
                                      <input type="file" accept="application/*" name="answer" class="form-control" placeholder="Upload Answer"/>
                                    </div>
                              </div>
                          </div>
                        <div class="form-footer">
                            <div class="row">
                                <div class="col-md-12">
                          <button type="submit" name="updateAssign" class="btn btn-primary btn-block">SUBMIT <i class="fe fe-send"></i></button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                    <!--====================  ENDING COURSE CONTENT PANEL =================-->

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function readtype(val){
// load the select option data into a div
    $('#loader').html("Please Wait...");
    $('#readtype').load('load/readtype.php?t='+val, function(){
    $('#loader').html("");
   });
}
</script>
<?php include 'layout/footer.php'; ?>
