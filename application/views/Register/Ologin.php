        <div id="login">   
          <h1>Welcome !<br>Land Owner</h1>
          <form action="<?php echo base_url();?>RegisterOwner/login_validation" method="post">
            <div class="field-wrap">
            <label>
              Email<span class="req"></span>
            </label>
            <input type="email" name="olog-email" required autocomplete="off"/>
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password" name="olog-pwd" required autocomplete="off"/>
            <span class="text-danger"><?php echo form_error('olog-pwd'); ?></span>
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
                  <p class="forgot"><a href="#">Forgot Email?</a></p>
           <input type="submit" name="OwnerLogin" value="Log In" class="button button-block">
           <?php 
            echo $this->session->flashdata("error");
           ?>
          </form>
        </div>
      </div><!-- tab-content -->