<?php
$active = 'lcourses';
include 'layout/header.php';
?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row row-cards row-deck">
<?php

//get courses for level and department.
$getcourse = select("SELECT * FROM cmanagement WHERE depID='".$userDet['depID']."' AND lecID='".$userDet['lecID']."'");
if($getcourse){
    foreach($getcourse as $allcourserow){
    //get course details..
    $cnm = select("SELECT * FROM courses WHERE ciD='".$allcourserow['cID']."'");
    foreach($cnm as $cnmrow){}
?>

<a href="./lcourses-det?cid=<?php echo $cnmrow['cID'];?>">
  <div class="col-sm-6 col-lg-3">
    <div class="card p-3">
      <div class="d-flex align-items-center">
        <span class="stamp stamp-md bg-red mr-3">
          <i class="fe fe-layers"></i>
        </span>
        <div>
          <h5 class="m-0"><a href="./lcourses-det?cid=<?php echo $cnmrow['cID'];?>"><?php echo $cnmrow['courseName'];?></a></h5>
            <small class="text-muted">LECTURES : 0</small>
        </div>
      </div>
    </div>
  </div>
</a>
<?php }}?>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
