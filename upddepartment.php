<?php
$active = 'department';
include 'layout/header.php';

if(isset($_GET['dp'])){
    $dp = $_GET['dp'];
}

$finddep = $department->find_by_facID($fid);
if($finddep){
    foreach($finddep as $deprow){}
}

if(isset($_POST['updfac'])){
    $facultyID = trim(htmlentities($_POST['facID']));
    $facultyName = trim(htmlentities($_POST['facultyName']));

    $udpdatefac = $faculty->updateFac($facultyID,$facultyName);
    if($udpdatefac){
        echo "<script>window.location.href='./faculty?fc=fup';</script>";
    }else{
        echo "<script>window.location.href='./faculty?fc=fupf';</script>";
    }
}

?>

<div class="my-3 my-md-5">
    <div class="container">
<!--
        <div class="page-header">
          <h1 class="page-title">
            <i class="fe fe-list"></i> Faculty
          </h1>
        </div>
-->
        <div class="row">
            <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-edit"></i> Update Department</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE DEPARTMENT ?');" >
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-hash"></i>  Department ID</label>
                      <input type="text" name="depID" value="<?php echo $dp;?>" class="form-control" readonly/>
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
                      <button type="submit" name="addDep" class="btn btn-primary btn-block" <?php if(!$allfac){ echo 'disabled';}?> >SAVE DEPARTMENT <i class="fe fe-download"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-sm-7">
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
                          <th><i class="fe fe-hash"></i> ID</th>
                          <th class="text-center"><i class="fe fe-grid"></i> DEPARTMENT NAME</th>
                          <th class="text-center"><i class="fe fe-users"></i> NO. OF LEC.</th>
                          <th class="text-center"><i class="fa fa-cog"></i> ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $alldepfac = $department->find_by_facID($facrow['facID']);
                          if($alldepfac){
                              foreach($alldepfac as $deprow){
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
                                <a href="./#?dp=<?php echo $deprow['depID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a href="./#?dp=<?php echo $deprow['depID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                          <?php }}else{ ?>
                          <tr>
                            <td colspan="4"> No Department For This Faculty.</td>
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
//$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
//});
</script>
<?php include 'layout/footer.php'; ?>
