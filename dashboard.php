<?php
$active = 'dashboard';
include 'layout/header.php';
?>
<?php if($access == 'manager'){ ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            IT Manager Dashboard
          </h1>
        </div>
        <div class="row">
          <div class="col-sm-3">
              <a href="./faculty" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-list"></i>  FACULTY</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numFAc = $faculty->find_num_fac();?></div>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-sm-3">
              <a href="./department" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-grid"></i>  DEPARTMENTS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numDep = $department->find_num_dep();?></div>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-sm-3">
              <a href="./lecturers" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-users"></i>  LECTURERS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numLec = $lecturer->find_num_lec();?></div>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-sm-3">
              <a href="./students" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-users"></i> STUDENTS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numStud = $student->find_num_student();?></div>
                  </div>
                </div>
              </a>
          </div>
        </div>
    </div>
</div>
<?php }?>

<?php if($access == 'hod'){ ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            HOD Dashboard
          </h1>
        </div>

        <div class="row"></div>
    </div>
</div>
<?php }?>


<?php if($access == 'lecturer'){ ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            Lecturer Dashboard
          </h1>
        </div>

        <div class="row"></div>
    </div>
</div>
<?php }?>



<?php if($access == 'student'){ ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            Student Dashboard
          </h1>
        </div>

        <div class="row"></div>
    </div>
</div>
<?php }?>


<?php include 'layout/footer.php'; ?>
