<?php
$active = 'scourses';
include 'layout/header.php';
?>
<style>
/* width */
#chatpanel:-webkit-scrollbar {
  width: 10px;
}

/* Track */
#chatpanel :-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
#chatpanel:-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
#chatpanel :-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            Database Administration
          </h1>
        </div>
        <div class="row">
<!--
            <a href="./scourses-det?cid=1">
            <div class="col-sm-6 col-xl-4">
                <div class="card">
                  <a href="./scourses-det?cid=1">
                      <img class="card-img-top" src="./demo/photos/david-klaasen-54203-500.jpg" alt="Courses Name">
                    </a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="./scourses-det?cid=1"></a></h4>
                  </div>
                </div>
              </div>
            </a>
-->

              <div class="col-sm-6 col-xl-4">
                <div class="card p-3">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fe fe-user"></i>
                    </span>
                    <div>
                      <h4 class="m-0"> Lecturer Name</h4>
<!--                      <small class="text-muted">32 shipped</small>-->
                    </div>
                  </div>
                </div>
                <div class="card">
                  <ul class="list-group card-list-group" id="chatpanel" style="height:200px;">
                    <li class="list-group-item py-5">
                      <div class="media">
                        <div class="media-body">
                          <div class="media-heading">
                            <small class="float-right text-muted">4 min</small>
                            <h5>Peter Richards</h5>
                          </div>
                          <div>
                            Aenean lacinia bibendum nulla sed consectetur.
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item py-5">
                      <div class="media">
                        <div class="media-body">
                          <div class="media-heading">
                            <small class="float-right text-muted">4 min</small>
                            <h5>Peter Richards</h5>
                          </div>
                          <div>
                            Aenean lacinia bibendum nulla sed consectetur.
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <div class="card-footer">
                    <form method="post" enctype="multipart/form-data" style="width:100%;">
                        <div class="input-group">
                              <input type="text" class="form-control" placeholder="Message To Lecturer">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-secondary">
                                  <i class="fe fe-send"></i>
                                </button>
                              </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

            <div class="col-md-6 col-xl-8">
                <div class="card card-collapsed">
                    <div class="card-status bg-blue"></div>
                  <div class="card-header">
                    <h3 class="card-title"> Lecture 1 - Introduction To Database Administration.</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                    </div>
                  </div>

                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                          <div class="card-body" style="padding:5px;">
                              <video width="100%" height="300" controls>
                                  <source src="Ink In Motion.mp4" style="width:100%;" type="video/mp4">
                                Your browser does not support the video tag.
                                </video>
                          </div>
                        </div>
                      </div>

                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead>
                                <th style="font-weight:bold;"> Lecture Documents</th>
                            </thead>
                            <tr>
                                <td>
                                    <a href="bootstrap_tutorial.pdf" target="_blank" class="btn btn-primary btn-sm btn-block"><i class="fe fe-file"></i> bootstrap_tutorial.pdf</a></td>
                            </tr>
                        </table>
                          </div>
                          <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead>
                                <th style="font-weight:bold;"> Required Readings</th>
                            </thead>
                            <tr>
                                <td><a href="#" class="btn btn-primary btn-sm btn-block"></a></td>
                            </tr>
                        </table>
                    </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
