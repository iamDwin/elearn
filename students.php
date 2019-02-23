<?php
$active = 'students';
include 'layout/header.php';

if(isset($_GET['st'])){
    $st = $_GET['st'];
    $lc = '';
    $dp = '';
    $fc = '';
}else{
    $st = '';
    $lc = '';
    $dp = '';
    $fc = '';
}

$numStu = $student->find_num_student();
$stuNum = $numStu + 1;
$studID =  "PUC/19".sprintf('%04s',$stuNum);


?>

<div class="my-3 my-md-5">
    <div class="container">
<!--
        <div class="page-header">
          <h1 class="page-title"> <i class="fe fe-users"></i>  Students </h1>
        </div>
-->
        <div class="row">
            <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-user-check"></i> Register Students</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE DEPARTMENT ?');" >

                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-icon">
                                <span class="input-icon-addon"><i class="fe fe-hash"></i><span class="form-required">*</span></span>
                                <input type="text" name="lecID" class="form-control" value="<?php echo $studID;?>" placeholder="Lecturer ID" readonly>
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

                      <div class="form-group">
                      <label class="form-label"><i class="fe fe-folder"></i> School<span class="form-required">*</span></label>
                        <div class="input-icon">
                            <select class="form-control" name="school" required>
                                <option></option>
                                <option value="Regular"> Regular</option>
                                <option value="Evening"> Evening</option>
                                <option value="Weekend"> Weekend</option>
                            </select>
                        </div>
                      </div>

                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-grid"></i> Department Name</label>
                        <?php
                        $finddep = $department->find_all_dep();
                        if($finddep){
                        ?>
                        <select name="depID" class="form-control" required>
                            <option></option>
                            <?php
                            foreach($finddep as $deprow){
                            ?>
                            <option value="<?php echo $deprow['depID'];?>" > <?php echo $deprow['departmentName'];?> </option>
                            <?php }?>
                        </select>
                        <?php }else{ ?>
                      <input type="text" name="depID" class="form-control" value="NO DEPARTMENT CREATED" readonly disabled />
                        <?php }?>
                    </div>

                    <div class="form-group" id="dept"></div>

                    <div class="form-footer">
                        <button type="submit" name="addStu" class="btn btn-primary btn-block" <?php if(!$finddep){ echo 'disabled';}?> >
                          REGISTER STUDENT <i class="fe fe-download"></i>
                        </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


              <div class="col-md-7">
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
                          $allstu = $student->find_all_student();
                          if($allstu){
                              foreach($allstu as $sturow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $sturow['studentID'];?></div>
                            <div class="small text-muted">
                              Registered : <?php echo $lecrow['doe'];?>
                            </div>
                          </td>
                          <td class="text-center">
                              <?php echo $sturow['lastName']." ".$sturow['firstName']." ".$sturow['otherName'];?>
                          </td>
<!--                          <td class="text-center"> <?php // echo $numDeplec = $department->find_num_deplec($deprow['depID']);?> </td>-->
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="./#?dp=<?php echo $sturow['studentID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a href="./#?dp=<?php echo $sturow['studentID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                          <?php }}else{?>
                          <tr>
                            <td colspan="3"> No <i class="fe fe-users"></i> Student Registered.</td>
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
<?php include 'layout/footer.php'; ?>
