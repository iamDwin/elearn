<?php
$active = 'ltests';
include 'layout/header.php';

if(isset($_GET['tid'])){
    $tid = $_GET['tid'];
    $test = select("SELECT * FROM test WHERE testID='$tid'");
    foreach($test as $testrow){}
}
$_SESSION['current_page']=$_SERVER['REQUEST_URI'];

//$alltest = select("SELECT * FROM test WHERE cID='$cid'");
//$numTest = count($alltest);
//$newnum = $numTest + 1;
//$testID = date("dsi").$newnum;

//if(isset($_POST['createTest'])){
//    $testID = trim(htmlentities($_POST['testID']));
//    $lecture = trim(htmlentities($_POST['lecture']));
//    $passMark = trim(htmlentities($_POST['passMark']));
//    $duration = trim(htmlentities($_POST['duration']));
//
//    //check if test ID exixts....
//    $TIDexist = select("SELECT * FROM test WHERE testID='$testID'");
//    if($TIDexist){
//        $testID = $testID + 1;
//        $saveTest = insert("INSERT INTO test(cID,testID,lecture,passMark,duration,doe) VALUES('$cid','$testID','$lecture','$passMark','$duration','$dateToday')");
//        if($saveTest){
//            $success = "<script>document.write('TEST CREATED..!');window.location.href='".$_SESSION['current_page']."';</script>";
//        }else{
//            $error = "<script>document.write('TEST CREATION FAILED,TRY AGAIN.!');</script>";
//        }
//    }else{
//        $saveTest = insert("INSERT INTO test(cID,testID,lecture,passMark,duration,doe) VALUES('$cid','$testID','$lecture','$passMark','$duration','$dateToday')");
//        if($saveTest){
//            $success = "<script>document.write('TEST CREATED..!');window.location.href='".$_SESSION['current_page']."';</script>";
//        }else{
//            $error = "<script>document.write('TEST CREATION FAILED,TRY AGAIN.!');</script>";
//        }
//    }
//}

?>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
        <h1 class="page-title">TEST <?php echo $tid;?> - GENERAL REPORT</h1>
        </div>
        <div class="row">
              <div class="col-sm-12">
            <?php if($success){ ?>
                  <div class="alert alert-icon alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert"></button>
                      <i class="fe fe-check mr-2" aria-hidden="true"></i> <?php echo $success; ?>
                    </div>
                <?php } if($error){ ?>
                    <div class="alert alert-icon alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"></button>
                      <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> <?php echo $error;?>
                    </div>
                <?php } ?>
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                      <thead>
                        <tr>
                          <th><i class="fe fe-hash"></i> STUDENT ID</th>
                          <th class="text"><i class="fe fe-user"></i> NAME</th>
                          <th class="text"><i class="fe fe-check-square"></i> PASS MARK</th>
                          <th class="text"><i class="fe fe-check"></i> SCORE</th>
                          <th class="text"><i class="fe fe-check"></i> STATUS</th>
                          <th class="text-center"><i class="fa fa-cog"></i> ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $select = select("SELECT * FROM generalreport WHERE testID='$tid' ORDER BY totalScore DESC");
                            if($select){
                                foreach($select as $reportrow){
                                    $student = select("SELECT * FROM student WHERE studentID='".$reportrow['studentID']."'");
                                    foreach($student as $studentrow){}
                          ?>
                          <tr>
                            <td> <?php echo $reportrow['studentID'];?></td>
                            <td> <?php echo $studentrow['firstName']." ".$studentrow['otherName']." ".$studentrow['lastName'];?></td>
                            <td> <?php echo $testrow['passMark']; ?></td>
                            <td> <?php echo $reportrow['totalScore']; ?></td>
                            <td> <?php if($reportrow['teststatus'] == 'PASS'){?>
                                <span class="tag tag-green"> PASS</span>
                                <?php } if($reportrow['teststatus'] == 'FAILED'){?>
                                <span class="tag tag-red"> FAILED</span>
                                <?php } ?>
                            </td>
                            <td class="text-center"><a href="" class="btn btn-info"> Individual Report</a></td>
                          </tr>
                          <?php }}else{ ?>
                          <tr><td colspan="6"> NO REPORTS FOR THIS TEST YET.</td></tr>
                          <?php }?>
                      </tbody>
                        <tfoot style="border-top:1px solid #eee;">
                            <tr>
                                <td><a class="btn btn-primary btn-block" href="javascript:history.back()">
                                    <i class="fe fe-arrow-left mr-2"></i>Go back
                                </a></td>
                                <td colspan="6"></td>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
