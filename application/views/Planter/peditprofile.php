<form method="post" action="<?php echo base_url();?>Planter/proupdate">
    <h1 style="background-color:#28a19c; color: white; padding: 10px;"><strong>Profile</strong></h1>
    
     <b> <div class="form-group">
      <label for="exampleInputName">First Name</label>
    <input type="firstname" name="ufname"class="form-control"value="<?php echo $this->session->userdata('fname'); ?>" id="exampleInputName">
    </div>
    <div class="form-group">
    <label for="exampleInputName">Last Name</label>
    <input type="lastname" name="ulname"class="form-control" value="<?php echo $this->session->userdata('lname'); ?>"id="exampleInputName">
    </div>
    <div class="form-group">
    <label for="exampleInputaadhaar">Aadhaar No</label>
    <input type="aadhaar" name="uAadhaarNo"class="form-control" value="<?php echo $this->session->userdata('aadhaar'); ?>"id="exampleInputaadhaar">
    </div>
    <div class="form-group">
    <label for="exampleInputphone">Phone No</label>
    <input type="phone" name="uph"class="form-control"value="<?php echo $this->session->userdata('ph'); ?>" id="exampleInputphone">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"name="uemail" class="form-control" value="<?php echo  $this->session->userdata('emailid'); ?>"id="exampleInputEmail" aria-describedby="emailHelp">
    </div>
     <div  class="form-group" align="center">
     <input type="submit" name="Update" class="btn btn-primary" value="Update" align="center" style="padding: 7px 20px 7px 20px; font-size:90%;">
    </div></b></h3>
      
</form>