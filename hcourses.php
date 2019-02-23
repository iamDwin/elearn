<?php
$active = 'hcourses';
include 'layout/header.php';

if(isset($_GET['lc'])){
    $lc = $_GET['lc'];
    $dp = '';
    $fc = '';
    $st = '';
}else{
    $lc = '';
    $dp = '';
    $fc = '';
    $st = '';
}

//$numLec = $lecturer->find_num_lec();
//$LecNum = $numLec + 1;
//$lecID =  "-".sprintf('%06s',$LecNum);


?>

<div class="my-3 my-md-5">
    <div class="container">
<!--        <div class="page-header">-->
<!--          <h1 class="page-title"> <i class="fe fe-users"></i>  Lecturers </h1>-->
<!--        </div>-->
        <div class="row">
            <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-layers"></i> Create Courses</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE DEPARTMENT ?');" >
                      <table id="dynamic_field4" class="table table-bordered" width="100%">
                            <thead>
                                <th width="30%">Course ID<span class="form-required">*</span></th>
                                <th>Course Name<span class="form-required">*</span></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="lecID" class="form-control" placeholder="Course ID" required></td>
                                    <td><input type="text" name="courseName" class="form-control" placeholder="Course Name" required ></td>
                                    <td><button type="button" name="add" id="add4" class="btn btn-primary">ADD MORE</button></td>
                                </tr>
                            </tbody>
                      </table>
                    <div class="form-footer">
                        <button type="submit" name="addDep" class="btn btn-primary btn-block" >
                          REGISTER COURSES <i class="fe fe-download"></i>
                        </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


              <div class="col-md-6">
                  <?php include 'alert.php'; ?>
                <div class="card">
                  <div class="table-responsive">
                    <table id="example" class="table table-hover table-outline table-vcenter text-nowrap card-table datatable">
                      <thead>
                        <tr>
                          <th><i class="fe fe-hash"></i> ID</th>
                          <th class="text-center"><i class="fe fe-grid"></i> COURSE</th>
                          <th class="text-center"><i class="fa fa-cog"></i>  ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $allcourse = $course->find_all_courses();
                          if($allcourse){
                              foreach($allcourse as $crow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $crow['cID'];?></div>
                            <div class="small text-muted">
                              Registered : <?php echo $crow['doe'];?>
                            </div>
                          </td>
                          <td class="text-center">
                              <?php echo $crow['courseName'];?>
                          </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="./#?dp=<?php echo $crow['cID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a href="./#?dp=<?php echo $crow['cID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                          <?php }}else{?>
                          <tr>
                            <td colspan="3"> No <i class="fe fe-layers"></i> Courses Registered.</td>
                          </tr>
                          <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var i=1;
        $('#add4').click(function(){
            i++;
            $('#dynamic_field4').append('<tr id="row'+i+'"><td><input type="text" name="lecID" class="form-control" placeholder="Course ID" required></td><td><input type="text" name="courseName" class="form-control" placeholder="Course Name" required ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>
<?php include 'layout/footer.php'; ?>
