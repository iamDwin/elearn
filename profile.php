<?php
$active = 'profile';
include 'layout/header.php';?>

        <div class="my-3 my-md-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Profile</h3>
                  </div>
                  <div class="card-body">
                    <div class="media">
<!--                      <span class="avatar avatar-xxl mr-5" style="background-image: url(demo/faces/male/21.jpg)"></span>-->
                      <span class="avatar avatar-xxl mr-5"><i class="fe fe-user"></i></span>
                      <div class="media-body">
                        <h4 class="m-0">Juan Hernandez</h4>
                        <p class="text-muted mb-0">Webdeveloper</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="Facebook" data-toggle="tooltip"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="Twitter" data-toggle="tooltip"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="1234567890" data-toggle="tooltip"><i class="fa fa-phone"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="@skypename" data-toggle="tooltip"><i class="fa fa-skype"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <form class="card">
                  <div class="card-body">
                    <h3 class="card-title">Edit Profile</h3>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Company</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" placeholder="Username" value="michael23">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" placeholder="Company" value="Chet">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="City" value="Melbourne">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Postal Code</label>
                          <input type="number" class="form-control" placeholder="ZIP Code">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Country</label>
                          <select class="form-control custom-select">
                            <option value="">Germany</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">About Me</label>
                          <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<?php include 'layout/footer.php';?>
