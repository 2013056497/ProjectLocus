
<section id="container" class="">

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Project
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset title="Add Project" class="step" id="default-step-0">
                                <legend> </legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Type</label>
                                    <div class="col-lg-10">
                                        <select class="form-control js-example-basic-single">
																					<?php foreach($project_types as $project_type){ ?>
                													<option value="<?php echo $project_type['id'];?>"><?php echo $project_type['name'];     ?></option>
																					<?php } ?>
                                        </select>
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-2 control-label">Status</label>
                                    <div class="col-lg-10">
                                        <select class="form-control js-example-basic-single">
																					<?php foreach($project_status as $pstatus){ ?>
                													<option value="<?php echo $pstatus['id'];?>"><?php echo $pstatus['name'];     ?></option>
																					<?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Project Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" cols="60" rows="5"></textarea>
                                    </div>
                                </div>

                                <legend> </legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Team</label>
                                    <div class="col-lg-10">
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

																<div class="form-group">
                                    <label class="col-lg-2 control-label">Attachments</label>
                                    <div class="col-lg-10">
																				<!--code-->
                                    </div>
                                </div>


                            </fieldset>
                            <input type="submit" class="finish btn btn-danger" value="Finish"/>
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
