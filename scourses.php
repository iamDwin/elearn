<?php
$active = 'scourses';
include 'layout/header.php';
?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row row-cards row-deck">
<?php

//get courses for level and department.
$getcourse = select("SELECT * FROM courses WHERE depID='".$userDet['depID']."' AND level='".$userDet['level']."'");
if($getcourse){
    foreach($getcourse as $allcourserow){
?>
<a href="./scourses-det?cid=<?php echo $allcourserow['cID'];?>">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
          <a href="./scourses-det?cid=<?php echo $allcourserow['cID'];?>">
              <img class="card-img-top" src="./demo/photos/david-klaasen-54203-500.jpg" alt="Courses Name">
            </a>
          <div class="card-body d-flex flex-column">
            <h4><a href="./scourses-det?cid=<?php echo $allcourserow['cID'];?>"><?php echo $allcourserow['courseName'];?></a></h4>
          </div>
        </div>
    </div>
</a>
<?php }}?>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
