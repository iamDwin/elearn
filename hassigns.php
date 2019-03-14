<?php
$active = 'hassigns';
include 'layout/header.php';

if(isset($_POST['addAssign'])){
    $cID = trim(htmlentities($_POST['cID']));
    $lecID = trim(htmlentities($_POST['lecID']));
}

?>

<div class="my-3 my-md-5">
    <div class="container">
<!--        <div class="page-header">-->
<!--          <h1 class="page-title"> <i class="fe fe-users"></i>  Lecturers </h1>-->
<!--        </div>-->
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
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                      <i class="fe fe-layers"></i> <i class="fe fe-chevron-right"></i> <i class="fe fe-users"></i> Assign Courses
                    </h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE ASSIGNINGS ?');" >
                      <table id="dynamic_field4" class="table table-bordered" width="100%">
                            <thead>
                                <th style="width:40%;"><i class="fe fe-layers"></i> Course<span class="form-required">*</span></th>
                                <th><i class="fe fe-user"></i> Lecturer<span class="form-required">*</span></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            $allcourse = $course->find_by_depID($userDet['depID']);
                                            if($allcourse){
                                        ?>
                                        <select class="form-control" name="cID" required>
                                            <option></option>
                                            <?php foreach($allcourse as $courserow){ ?>
                                            <option value="<?php echo $courserow['cID'];?>"><?php echo $courserow['courseName'];?></option>
                                            <?php }?>
                                        </select>
                                        <?php }else{ ?>
                                        <input type="text" name="" class="form-control" value="No Course Available" readonly >
                                        <?php }?>
                                    </td>
                                    <td>
                                         <?php
                                            $alllec = $lecturer->find_all_lecdep($userDet['depID']);
                                            if($alllec){
                                        ?>
                                        <select class="form-control" name="lecID" required>
                                            <option></option>
                                            <?php foreach($alllec as $lecrow){ ?>
                                            <option value="<?php echo $lecrow['lecID'];?>"><?php echo $lecrow['firstName']." ".$lecrow['lastName'];?></option>
                                            <?php }?>
                                        </select>
                                        <?php }else{ ?>
                                        <input type="text" name="" class="form-control" value="No Lecturer Available" readonly >
                                        <?php }?>
                                    </td>
                                    <td><button type="button" name="add" id="add4" class="btn btn-primary btn-block">ADD MORE</button></td>
                                </tr>
                            </tbody>
                      </table>
                      <div class="row">
                          <div class="col-md-8"></div>
                        <div class="col-md-4">
                          <div class="form-footer">
                            <button type="submit" name="addAssign" class="btn btn-primary btn-block" <?php if(!$allcourse){ echo "disabled";}?> >
                              SAVE ASSIGNINGS <i class="fe fe-download"></i>
                            </button>
                            </div>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>

              <div class="col-md-12">
                <div class="card">
                  <div class="table-responsive">
                    <table id="example" class="table table-hover table-outline table-vcenter text-nowrap card-table datatable">
                      <thead>
                        <tr>
                          <th><i class="fe fe-hash"></i> COURSE ID</th>
                          <th class="text-center"><i class="fe fe-grid"></i> COURSE</th>
                          <th class="text-center"><i class="fe fe-grid"></i> LECTURER</th>
                          <th class="text-center"><i class="fa fa-cog"></i>  ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $allcm = $cmanage->find_by_depID($depID)();
                          if($allcm){
                              foreach($allcm as $crow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $crow['cID'];?></div>
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
                            <td colspan="3"> No <i class="fe fe-layers"></i> Courses Assigned.</td>
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
            $('#dynamic_field4').append('<tr id="row'+i+'"><td><?php $allcourse = $course->find_by_depID($userDet['depID']); if($allcourse){ ?><select class="form-control" name="cID" required> <option></option> <?php foreach($allcourse as $courserow){ ?> <option value="<?php echo $courserow['cID'];?>"><?php echo $courserow['courseName'];?></option> <?php }?> </select> <?php }else{ ?> <input type="text" name="" class="form-control" value="No Course Available" readonly > <?php }?> </td> <td> <?php $alllec = $lecturer->find_all_lecdep($userDet['depID']); if($alllec){ ?> <select class="form-control" name="lecID" required> <option></option> <?php foreach($alllec as $lecrow){ ?> <option value="<?php echo $lecrow['lecID'];?>"><?php echo $lecrow['firstName']." ".$lecrow['lastName'];?></option> <?php }?> </select> <?php }else{ ?> <input type="text" name="" class="form-control" value="No Lecturer Available" readonly > <?php }?> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>
<?php include 'layout/footer.php'; ?>
