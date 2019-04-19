<?php
$active = 'message';
include 'layout/header.php';

//if(isset($_GET['cid'])){
//    $cid = $_GET['cid'];
//}
$_SESSION['current_page']=$_SERVER['REQUEST_URI'];

//GET ALL MESSAGES FOR USER..
$msges = select("SELECT * FROM messages WHERE recipient='".$userDet['userID']."' AND status='unread'");
if($msges){
    foreach($msges as $msgrow){}
    //num of unread messages...
    $numunread = count(select("SELECT * FROM messages WHERE recipient='".$userDet['userID']."' AND status='unread'"));
}
?>

<div class="my-3 my-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
<!--        <h3 class="page-title mb-5">Messaging Service</h3>-->
        <div>
          <div class="list-group list-group-transparent mb-0">
            <a href="./inbox" class="list-group-item list-group-item-action d-flex align-items-center active">
              <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-primary"><?php if($numunread == 0){ echo '';}else{ echo $numunread; }?></span>
            </a>
            <a href="./trash-message" class="list-group-item list-group-item-action d-flex align-items-center">
              <span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
            </a>
          </div>
          <div class="mt-6">
            <a href="./message" class="btn btn-secondary btn-block">Compose New Message</a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <table class="table card-table table-vcenter">
              <?php
                if($msges){
                    foreach($msges as $msgrow){
                    $sender = $msgrow['sender'];
              ?>
            <tr>
              <td class="text-bold"><a href="" ><?php echo $sender; ?></a> </td>
              <td> <a href="./message-details?mid=<?php echo $msgrow['mid'];?>"><?php echo $msgrow['heading'];?></a> </td>
            <td class="text-right text-muted d-none d-md-table-cell text-nowrap"> <?php echo $msgrow['date']." ".$msgrow['time'];?></td>
              <td class="text-right text-muted d-none d-md-table-cell text-nowrap">
                  <a href="./message-details?mid=<?php echo $msgrow['mid'];?>" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i></a>
                </td>
            </tr>
              <?php }}else{ ?>
              <tr> <td colspan="4"> No Messages Available</td> </tr>
              <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'layout/footer.php'; ?>
