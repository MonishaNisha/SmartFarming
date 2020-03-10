        <div id="login">   
          <h1>Welcome !<br>Planter</h1>
          <form action="<?php echo base_url();?>/RegisterPlanter/login_validation" method="post">
            <div class="field-wrap">
            <label>
              Email<span class="req"></span>
            </label>
            <input type="email" name="plog-email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password" name="plog-pwd" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
                  <p class="forgot"><a href="#">Forgot Email?</a></p>
           <input type="submit" name="PlanterLogin" value="Log In" class="button button-block">
          </form>
        </div>
      </div><!-- tab-content -->
