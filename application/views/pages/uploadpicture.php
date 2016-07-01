<!--main content start-->
<section id="main-content">
  <section class="wrapper">


    <!--Advanced File Input start-->
     <div class="row">
         <div class="col-md-12">
             <section class="panel">

                             <div class="form-group last">
                                 <label class="control-label col-md-3"><p style="color: #797979">Image Upload</p></label>
                                 <div class="col-md-9">
                                   <?php echo form_open_multipart('main/uploadpic');?>
                                     <div class="fileupload fileupload-new" data-provides="fileupload">
                                         <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                             <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                         </div>
                                         <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                         <div>
                                          <span class="btn btn-white btn-file">
                                          <span class="fileupload-new" style="color: #797979"><i class="fa fa-paper-clip" ></i> Select image</span>
                                          <span class="fileupload-exists" style="color: #797979"><i class="fa fa-undo"></i> Change</span>
                                          <input type="file" class="default" name="userfile" />
                                          </span>
                                             <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                              <input class="btn btn btn-success fileupload-exists" type="submit" value="Upload Image">
                                         </div>
                                     </div>
                                   </form>

                                 </div>
                             </div>


             </section>
         </div>
     </div>






      </section>
    </section>
    <!--main content end-->
