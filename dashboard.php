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

        <div class="row">
          <div class="col-sm-4">
              <a href="./hlecturers" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-users"></i>  LECTURERS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numLec = $lecturer->find_num_lec();?></div>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-sm-4">
              <a href="./hstudents" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-users"></i> STUDENTS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numStud = $student->find_num_student();?></div>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-sm-4">
              <a href="./hcourses" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-layers"></i> COURSES</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numStud = $student->find_num_student();?></div>
                  </div>
                </div>
              </a>
          </div>
        </div>
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

        <div class="row">
            <div class="col-md-4">
                 <div class="card">
                  <div class="card-body">
                    <div class="media">
                      <span class="avatar avatar-xxl mr-5" style=""><i class="fe fe-user"></i></span>
                      <div class="media-body">
                        <h4 class="m-0"> Student Name</h4>
                        <p class="text-muted mb-0">Student ID</p>
                        <p class="text-muted mb-0">Faculty</p>
                        <p class="text-muted mb-0">Department</p>
                        <p class="text-muted mb-0">Level</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <a href="./scourses" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-layers"></i> COURSES</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numStud = $student->find_num_student();?></div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="./scourses" style="text-decoration:none; color:rgba(5, 5, 5, 0.62);">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="h5"><i class="fe fe-layers"></i> TESTS</div>
                    <div class="display-4 font-weight-bold mb-4"><?php echo $numStud = $student->find_num_student();?></div>
                  </div>
                </div>
              </a>
            </div>
        </div>
    </div>
</div>
<?php }?>


<?php include 'layout/footer.php'; ?>
