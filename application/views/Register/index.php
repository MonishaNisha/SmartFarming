      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Land Owner</a></li>
        <li class="tab"><a href="#login">Planter</a></li>
      </ul>
      <div class="tab-content">
        <div id="signup">   
          <h1>Register for Land Owner</h1>
          <form action="<?php echo base_url();?>/RegisterOwner/registration" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="ofname" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="olname" required autocomplete="off"/>
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Aadhaar No<span class="req">*</span>
              </label>
              <input type="text" name="oAadhaarNo" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="12" maxlength="12" />
            </div>
            <div class="field-wrap">
              <label>
                Phone No<span class="req">*</span>
              </label>
              <input type="text"  name="oph"required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" />
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="oemail" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*Minimum 6 characters!</span>
            </label>
            <input type="password" name="opwd" required autocomplete="off"/>
          </div>
        <!--  <button type="submit"name="Register" class="button button-block"/>Register</button> -->
          <input type="submit" name="oRegister" value="Register" class="button button-block">
         <center><a href="<?php echo base_url();?>/RegisterOwner/logon"><h2 style="color:#009933"><b>Login</b></h2></a></center> 
          </form>
        </div>
        <div id="login">   
          <h1>Register for Planter!</h1>
          <form action="<?php echo base_url();?>/RegisterPlanter/registration" method="post">
            <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="pfname" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="plname" required autocomplete="off"/>
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Aadhaar No<span class="req">*</span>
              </label>
              <input type="text" name="pAadhaarNo" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="12" maxlength="12" />
            </div>
            <div class="field-wrap">
              <label>
                Phone No<span class="req">*</span>
              </label>
              <input type="text" name="pph" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"/>
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="pemail" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*Minimum 6 characters!</span>
            </label>
            <input type="password" name="ppwd" required autocomplete="off"/>
          </div>
         <!--  <button type="submit" class="button button-block"/>Register</button> -->
           <input type="submit" name="pRegister" value="Register" class="button button-block">
           <center><a href="<?php echo base_url();?>/RegisterPlanter/logon"><h2 style="color:#009933"><b>Login</b></h2></a></center> 
          </form>
        </div>
      </div><!-- tab-content -->