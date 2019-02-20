<?php
$active = 'department';
include 'layout/header.php';

if(isset($_GET['dp'])){
    $fc = $_GET['dp'];
}else{
    $fc = '';
}

$numdep = $department->find_num_dep();
$depNum = $numdep + 1;
$depID =  "DEP-".sprintf('%06s',$depNum);

if(isset($_POST['addDep'])){
    $departmentID = trim(htmlentities($_POST['depID']));
    $facultyID = trim(htmlentities($_POST['facID']));
    $departmentName = trim(htmlentities($_POST['departmentName']));

    $fexist = $department->find_by_depName($departmentName);
    if($fexist){
        echo "<script>window.location.href='./department?dp=efalse';</script>";
    }else{
        $saveDep = $department->addDep($departmentID,$facultyID,$departmentName,$dateToday);
        if($saveDep){
            echo "<script>window.location.href='./department?dp=true';</script>";
        }else{
            $fc = 'false';
        }
    }
}

?>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
           <i class="fe fe-grid"></i>  Department
          </h1>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php if($fc == 'false'){ ?>
                    <div class="alert alert-icon alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"></button>
                      <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> DEPARTMENT CREATION FAILED, TRY AGAIN.
                    </div>
                <?php } ?>
                <?php if($fc == 'efalse'){ ?>
                    <div class="alert alert-icon alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"></button>
                      <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> DEPARTMENT NAME ALREADY EXIST.
                    </div>
                <?php } ?>
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-plus-square"></i> Create Department</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE DEPARTMENT ?');" >
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-hash"></i>  Department ID</label>
                      <input type="text" name="depID" value="<?php echo $depID;?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-list"></i> Faculty Name</label>
                        <?php
                        $allfac = $faculty->find_all_fac();
                        if($allfac){
                        ?>
                        <select name="facID" class="form-control" required>
                            <option></option>
                            <?php
                            foreach($allfac as $facrow){
                            ?>
                            <option value="<?php echo $facrow['facID'];?>" > <?php echo $facrow['facultyName'];?> </option>
                            <?php }?>
                        </select>
                        <?php }else{ ?>
                      <input type="text" name="facID" class="form-control" value="NO FACULTY CREATED" readonly disabled />
                        <?php }?>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-grid"></i> Department Name</label>
                      <input type="text" name="departmentName" class="form-control" placeholder="Department Name" required />
                    </div>
                    <div class="form-footer">
                      <button type="submit" name="addDep" class="btn btn-primary btn-block" <?php if(!$allfac){ echo 'disabled';}?> >SAVE DEPARTMENT</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-md-7">
                <?php if($fc == 'true'){ ?>
                  <div class="alert alert-icon alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert"></button>
                      <i class="fe fe-check mr-2" aria-hidden="true"></i> DEPARTMENT CREATED.
                    </div>
                <?php } ?>
                <div class="card">
                  <div class="table-responsive">
                    <table id="example" class="table table-hover table-outline table-vcenter text-nowrap card-table datatable">
                      <thead>
                        <tr>
                          <th><i class="fe fe-hash"></i>  ID</th>
                          <th class="text-center"><i class="fe fe-grid"></i> DEPARTMENT NAME</th>
                          <th class="text-center"><i class="fe fe-users"></i> NO. OF LEC</th>
                          <th class="text-center"><i class="fa fa-cog"></i>  ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $alldep = $department->find_all_dep();
                          if($alldep){
                              foreach($alldep as $deprow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $deprow['depID'];?></div>
                            <div class="small text-muted">
                              Created : <?php echo $deprow['doe'];?>
                            </div>
                          </td>
                          <td class="text-center">
                              <?php echo $deprow['departmentName'];?>
                          </td>
                          <td class="text-center"> <?php echo $numDeplec = $department->find_num_deplec($deprow['depID']);?> </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="./faculty?dp=<?php echo $deprow['depID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a href="./delfac?dp=<?php echo $deprow['depID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                          <?php }}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php'; ?>
