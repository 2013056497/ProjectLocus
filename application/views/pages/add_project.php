
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
                                        <select class="form-control">
																					<?php foreach($results_array as $key => $value){ ?>
                													<option value="<?php echo $value['profile'];?>"><?php echo $value['profile'];     ?></option>
																					<?php } ?>
                                        </select>
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-2 control-label">Status</label>
                                    <div class="col-lg-10">
                                        <select class="form-control">
																					<?php foreach($results_array as $key => $value){ ?>
                													<option value="<?php echo $value['profile'];?>"><?php echo $value['profile'];     ?></option>
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
																			<div class="checkbox">
																				<label><input type="checkbox" value="">Option 1</label>
																				</div>
																				<div class="checkbox">
																				<label><input type="checkbox" value="">Option 2</label>
																				</div>
																				<div class="checkbox disabled">
																				<label><input type="checkbox" value="" disabled>Option 3</label>
																				</div>
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
