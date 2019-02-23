<?php
$active = 'hlecturers';
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

$numLec = $lecturer->find_num_lec();
$LecNum = $numLec + 1;
$lecID =  "LEC-".sprintf('%06s',$LecNum);


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
                  <h3 class="card-title"><i class="fe fe-user-check"></i> Register Lecturer</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE DEPARTMENT ?');" >

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-icon">
                                <span class="input-icon-addon"><i class="fe fe-hash"></i><span class="form-required">*</span></span>
                                <input type="text" name="lecID" class="form-control" value="<?php echo $lecID;?>" placeholder="Lecturer ID" readonly>
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon"><i class="fe fe-user"></i><span class="form-required">*</span></span>
                                    <input type="text" name="firstName" class="form-control" placeholder="First Name" required >
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                        <div class="input-icon">
                            <span class="input-icon-addon"><i class="fe fe-user"></i><span class="form-required">*</span></span>
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" required >
                        </div>
                      </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon"><i class="fe fe-user"></i></span>
                                    <input type="text" name="otherName" class="form-control" placeholder="Other Name">
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="input-icon">
                            <span class="input-icon-addon"><i class="fe fe-mail"></i><span class="form-required">*</span></span>
                            <input type="email" name="email" class="form-control" placeholder="Valid Email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-icon">
                            <span class="input-icon-addon"><i class="fe fe-phone"></i><span class="form-required">*</span></span>
                            <input type="email" name="tel" class="form-control" placeholder="Active Phone" required>
                        </div>
                      </div>

                    <div class="form-footer">
                        <button type="submit" name="addDep" class="btn btn-primary btn-block" >
                          REGISTER LECTURER <i class="fe fe-download"></i>
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
                          <th><i class="fe fe-hash"></i>  ID</th>
                          <th class="text-center"><i class="fe fe-grid"></i> FULL NAME</th>
<!--                          <th class="text-center"><i class="fe fe-users"></i> NO. OF LEC</th>-->
                          <th class="text-center"><i class="fa fa-cog"></i>  ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $alllec = $lecturer->find_all_lec();
                          if($alllec){
                              foreach($alllec as $lecrow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $lecrow['lecID'];?></div>
                            <div class="small text-muted">
                              Registered : <?php echo $lecrow['doe'];?>
                            </div>
                          </td>
                          <td class="text-center">
                              <?php echo $lecrow['lastName']." ".$lecrow['firstName']." ".$lecrow['otherName'];?>
                          </td>
<!--                          <td class="text-center"> <?php // echo $numDeplec = $department->find_num_deplec($deprow['depID']);?> </td>-->
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="./#?dp=<?php echo $lecrow['depID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a href="./#?dp=<?php echo $lecrow['depID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                          <?php }}else{?>
                          <tr>
                            <td colspan="3"> No <i class="fe fe-users"></i> Lecturers Registered.</td>
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
function facdep(val){
// load the select option data into a div
    $('#loader').html("Please Wait...");
    $('#dept').load('load/lecdep.php?fid='+val, function(){
    $('#loader').html("");
   });
}
</script>

<script>
//    $(document).ready(function(){
        var i=1;
        $('#add4').click(function(){
            i++;
            $('#dynamic_field4').append('<tr id="row'+i+'"><td><select class="span" name="accountName[]" required><option value="OPD"> OPD </option><option value="CONSULTATION"> CONSULTATION </option><option value="LABORATORY"> LABORATORY </option><option value="WARD"> WARD </option><option value="PHARMACY"> PHARMACY </option></select></td><td><select class="span" name="accountType[]" required><option value="CREDIT"> CREDIT ACCOUNT </option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
//    });
</script>
<?php include 'layout/footer.php'; ?>
