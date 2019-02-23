<?php
$active = 'faculty';
include 'layout/header.php';

if(isset($_GET['fc'])){
    $fc = $_GET['fc'];
    $dp = '';
    $lc = '';
    $st = '';
}else{
    $fc = '';
    $dp = '';
    $lc = '';
    $st = '';
}


$numfac = $faculty->find_num_fac();
$facNum = $numfac + 1;
$FacID =  "FAC-".sprintf('%06s',$facNum);

if(isset($_POST['addFac'])){
    $facultyID = trim(htmlentities($_POST['facID']));
    $facultyName = trim(htmlentities($_POST['facultyName']));

    $fexist = $faculty->find_by_facultyName($facultyName);
    if($fexist){
        echo "<script>window.location.href='./faculty?fc=efalse';</script>";
    }else{
        $saveFac = $faculty->addfac($facultyID,$facultyName,$dateToday);
        if($saveFac){
            echo "<script>window.location.href='./faculty?fc=true';</script>";
        }else{
            $fc = 'false';
        }
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
                  <h3 class="card-title"><i class="fe fe-plus-square"></i> Create Faculty</h3>
                </div>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data" onsubmit="return confirm('SAVE FACULTY ?');" >
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-hash"></i> Faculty ID</label>
                      <input type="text" name="facID" value="<?php echo $FacID;?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fe fe-list"></i> Faculty Name</label>
                      <input type="text" name="facultyName" class="form-control" placeholder="Faculty Name"/>
                    </div>
                    <div class="form-footer">
                      <button type="submit" name="addFac" class="btn btn-primary btn-block">SAVE FACULTY <i class="fe fe-download"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-sm-7">
            <?php include 'alert.php'; ?>
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                      <thead>
                        <tr>
                          <th><i class="fe fe-hash"></i> ID</th>
                          <th class="text-center"><i class="fe fe-list"></i> FACULTY NAME</th>
                          <th class="text-center"><i class="fe fe-grid"></i> NO. OF DEP</th>
                          <th class="text-center"><i class="fa fa-cog"></i> ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $allfac = $faculty->find_all_fac();
                          if($allfac){
                              foreach($allfac as $facRow){
                          ?>
                        <tr>
                          <td>
                            <div><?php echo $facRow['facID'];?></div>
                            <div class="small text-muted">
                              Created : <?php echo $facRow['doe'];?>
                            </div>
                          </td>
                          <td class="text-center">
                              <?php echo $facRow['facultyName'];?>
                          </td>
                          <td class="text-center"> <?php echo $numfacDep = $faculty->find_num_facdep($facRow['facID']);?> </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="./updfaculty?fid=<?php echo $facRow['facID'];?>" class="dropdown-item text-primary"><i class="dropdown-icon fe fe-edit"></i> Update </a>
                                <a onclick="return confirm('CONFIRM DELETE');" href="./delfaculty?fid=<?php echo $facRow['facID'];?>" class="dropdown-item text-danger"><i class="dropdown-icon fe fe-trash"></i> Delete </a>
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
