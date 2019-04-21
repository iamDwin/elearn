<?php
$active = 'message';
include 'layout/header.php';



if(isset($_GET['mid'])){
    $mid = $_GET['mid'];
}
$_SESSION['current_page']=$_SERVER['REQUEST_URI'];

//get message details..
$mesage = select("SELECT * FROM messages WHERE mid='$mid'");
if(count($mesage) > 0){
    foreach($mesage as $msgrow){}
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
              <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-primary"><?php echo $msgs;?></span>
            </a>
            <a href="./sent-message" class="list-group-item list-group-item-action d-flex align-items-center">
              <span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
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
          <div class="card-header">
              <h4 class="card-title"> Message Heading.</h4>
          </div>
          <ul class="list-group card-list-group">
            <li class="list-group-item py-5">
              <div class="media">
                <div class="media-object avatar mr-4"> <i class="fe fe-user"></i></div>
                <div class="media-body">
                  <div class="media-heading">
                    <small class="float-right text-muted"><?php echo timeago($msgrow['doe']);?></small>
                    <h5>Peter Richards</h5>
                  </div>
                  <div>
                    Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur
                  </div>
                  <ul class="media-list" style="height:150px; overflow: scroll;">
                    <li class="media mt-4">
                      <div class="media-object avatar mr-4"><i class="fe fe-user"></i></div>
                      <div class="media-body">
                        <strong>Debra Beck: </strong>
                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                        auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                      </div>
                    </li>
                      <hr>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Message">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-secondary">
                              Send Reply <i class="fe fe-send"></i>
                            </button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'layout/footer.php'; ?>
