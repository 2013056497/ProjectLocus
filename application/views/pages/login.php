<div id="resp_container" class="container">
  <img id="logo" src="<?=base_url()?>img/logo/locus_logo.png" align="middle"/>
  <h1 id="logo_title">Locus</h1>
  <h2 id="logo_subtitle">A Project Management Platform</h2>
  <?= form_open('main/authentication', 'class="form-signin"')?>
    <h2 class="form-signin-heading">sign in now</h2>
    <div class="login-wrap">
      <div class="form-group <?php if(form_error('email')){echo 'has-error';}?>">

        <input type="text" name="email" class="form-control" placeholder="Email">
            <?php  if(form_error('email')){?>
              <span><?php echo form_error('email'); ?></span>
            <?php } ?>
      </div>
      <div class="form-group <?php if(form_error('password')){echo 'has-error';}?>">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <?php  if(form_error('password')){?>
          <span><?php echo form_error('password'); ?></span>
        <?php } ?>
      </div>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

    </div>

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div id="red" class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Forgot Password ?</h4>
                  </div>
                  <div class="modal-body">
                      <p>Enter your e-mail address below to reset your password.</p>
                      <input type="text" name="lostemail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                  </div>
                  <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                      <button id="red" class="btn btn-success" type="button">Submit</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- modal -->

  </form>

</div>
