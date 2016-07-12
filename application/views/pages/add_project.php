
<section id="container" class="">

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Project
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset title="Add Project" class="text-center step" id="default-step-0">
                              <div class="col-md-11 col-md-offset-2">
                              <div class="col-md-12 red_border">
                                <h5 class="col-md-8 red no_margin">
                                  General
                                </h5>
                                <div class="col-md-10 form-group">
                                    <label class="col-md-4 control-label">Type</label>
                                    <div class="col-md-10">
                                        <select class="form-control js-example-basic-single">
																					<?php foreach($project_types as $project_type){ ?>
                													<option value="<?php echo $project_type['id'];?>"><?php echo $project_type['name'];     ?></option>
																					<?php } ?>
                                        </select>
                                    </div>
                                </div>
																<div class="col-md-10 form-group">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-10">
                                        <select class="form-control js-example-basic-single">
																					<?php foreach($project_status as $pstatus){ ?>
                													<option value="<?php echo $pstatus['id'];?>"><?php echo $pstatus['name'];     ?></option>
																					<?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10 form-group">
                                    <label class="col-md-4 control-label">Project Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
																<div class="col-md-10 form-group">
                                    <label class="col-md-4 control-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" cols="60" rows="4"></textarea>
                                    </div>
                                </div>
                              </div>
                              <div class="m-t-20 col-md-12 red_border">
                                <h5 class="col-md-8 red m-bot20">
                                  Stakeholders
                                </h5>
                                <div class="col-md-10 form-group">
                                    <div class="col-md-10">
                                      <select class="form-control js-example-basic-multiple"  multiple="multiple">
                                        <optgroup label="Center Heads">
                                          <?php foreach ($center_heads as $center_head) { ?>
                                              <option value="<?php echo $center_head['user_id']; ?>"><?php echo $center_head['fname']; ?></option>
                                          <?php } ?>
                                        </optgroup>
                                        <optgroup label="HSPD">
                                          <?php foreach ($hspd_emps as $hspd_emp) { ?>
                                              <option value="<?php echo $hspd_emp['user_id']; ?>"><?php echo $hspd_emp['fname']; ?></option>
                                          <?php } ?>
                                        </optgroup>
                                        <optgroup label="HAM">
                                          <?php foreach ($ham_emps as $ham_emp) { ?>
                                              <option value="<?php echo $ham_emp['user_id']; ?>"><?php echo $ham_emp['fname']; ?></option>
                                          <?php } ?>
                                        </optgroup>
                                        <optgroup label="HSCD">
                                          <?php foreach ($hscd_emps as $hscd_emp) { ?>
                                              <option value="<?php echo $hscd_emp['user_id']; ?>"><?php echo $hscd_emp['fname']; ?></option>
                                          <?php } ?>
                                        </optgroup>
                                        <optgroup label="HSQM">
                                          <?php foreach ($hsqm_emps as $hsqm_emp) { ?>
                                              <option value="<?php echo $hsqm_emp['user_id']; ?>"><?php echo $hsqm_emp['fname']; ?></option>
                                          <?php } ?>
                                        </optgroup>
                                      </select>
                                    </div>
                                </div>
                              </div>
                              <div class="m-t-20 col-md-12 red_border">
                                <h5 class="col-md-8 red m-bot20">
                                  Attachments
                                </h5>
																<div class="col-md-12 form-group">
                                  <div class="col-md-5 col-md-offset-2">
                                    <input style="padding-right:0px;" class="_red btn btn-danger" type="file" multiple=""/>
                                  </div>
                                </div>
                              </div>
                              <hr class="col-md-8">
                              <input type="submit" class="m-t-20 _red col-md-8 btn btn-danger" value="Add Project"/>
                            </div>
                            </fieldset>
                        </form>
                      </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
</section>
