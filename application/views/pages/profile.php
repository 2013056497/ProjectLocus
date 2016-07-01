<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- page start-->
    <div class="row">
        <aside class="profile-nav col-lg-3">
            <section class="panel">
                <div class="user-heading round">
                    <a href="#">
                      <?php
                        if(empty($photo)){
                       ?>

                        <img src="<?php echo base_url(); ?>img/profile-avatar.jpg" alt="">
                        <?php }else{ ?>
                        <img src="<?php echo base_url(); ?><?php echo $folder; ?>/<?php echo $photo; ?>" alt="">
                          <?php } ?>

                    </a>
                    <h1><?php echo $this->session ->userdata('fullname'); ?></h1>
                    <p><?php echo $this->session ->userdata('email'); ?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="profile-activity.html"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                    <li><a href="<?php echo base_url(); ?>main/uploadpicture"> <i class="fa fa-upload"></i> Upload Profile picture</a></li>
                </ul>

            </section>
        </aside>
        <aside class="profile-info col-lg-9">

            <section class="panel">

                <div class="panel-body bio-graph-info">
                    <h1>Bio Graph</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: <?php echo $this->session->userdata('fname'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Middle Name </span>: <?php echo $this->session->userdata('mname'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: <?php echo $this->session->userdata('lname'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Email</span>: <?php echo $this->session->userdata('email'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Division </span>: <?php echo $this->session->userdata('divname'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Division Code </span>: <?php echo $this->session->userdata('divcode'); ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Location </span>: <?php echo $this->session->userdata('divloc'); ?></p>
                        </div>
                        <!-- <div class="bio-row">
                            <p><span>Phone </span>: 88 (02) 123456</p>
                        </div> -->
                    </div>
                </div>
            </section>
            <section>

            </section>
        </aside>
    </div>

    <!-- page end-->







  </section>
</section>
<!--main content end-->
