<?php
$active = 'message';
include 'layout/header.php';

//if(isset($_GET['cid'])){
//    $cid = $_GET['cid'];
//}
$_SESSION['current_page']=$_SERVER['REQUEST_URI'];


?>

<div class="my-3 my-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
<!--        <h3 class="page-title mb-5">Messaging Service</h3>-->
        <div>
          <div class="list-group list-group-transparent mb-0">
            <a href="./inbox" class="list-group-item list-group-item-action d-flex align-items-center ">
              <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-primary"><?php echo $msgs;?></span>
            </a>
            <a href="./sent-message" class="list-group-item list-group-item-action d-flex align-items-center active">
              <span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
            </a>
            <a href="./trash-message" class="list-group-item list-group-item-action d-flex align-items-center ">
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
            <tr>
              <td class="text-bold"><a href="./message-details">Sender</a> </td>
              <td> <a href="./message-details">Message Heading</a> </td>
              <td class="text-right text-muted d-none d-md-table-cell text-nowrap"> Date & Time</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'layout/footer.php'; ?>
