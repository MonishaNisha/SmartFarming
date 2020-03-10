
<form method="post"action="<?php echo base_url();?>RegisterPlanter/pedit">
  
    
    <!-- <label for="exampleInputName">First Name</label>
    <input type="firstname" class="form-control"value="<?php echo $this->session->userdata('fname'); ?>" id="exampleInputName">
    </div>
    <div class="form-group">
    <label for="exampleInputName">Last Name</label>
    <input type="lastname" class="form-control" value="<?php echo $this->session->userdata('lname'); ?>"id="exampleInputName">
    </div>
    <div class="form-group">
    <label for="exampleInputaadhaar">Aadhaar No</label>
    <input type="aadhaar" class="form-control" value="<?php echo $this->session->userdata('aadhaar'); ?>"id="exampleInputaadhaar">
    </div>
    <div class="form-group">
    <label for="exampleInputphone">Phone No</label>
    <input type="phone" class="form-control"value="<?php echo $this->session->userdata('ph'); ?>" id="exampleInputphone">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" class="form-control" value="<?php echo  $this->session->userdata('emailid'); ?>"id="exampleInputEmail" aria-describedby="emailHelp">
    </div> -->
    
   
      <h1 style="background-color:#28a19c; color: white; padding: 10px;"><strong>Profile</strong></h1>
    
      <h3 style="  background-color:white;  padding: 10px;"> <div class="form-group" >
    <h4><label for="exampleInputName">First Name</label>
    <p><?php echo $this->session->userdata('fname'); ?></p></h4>
    </div>
    <div class="form-group">
    <h4><label for="exampleInputName">Last Name</label>
    <p><?php echo $this->session->userdata('lname'); ?></p></h4>
    </div>
    <div class="form-group">
    <h4><label for="exampleInputphone">Phone No</label>
    <p><?php echo $this->session->userdata('ph');?></p></h4>
    </div>
    <div class="form-group">
    <h4><label for="exampleInputaadhaar">Aadhaar No</label>
    <p><?php echo $this->session->userdata('aadhaar'); ?></p></h4>
    </div>
    <div class="form-group">
    <h4><label for="exampleInputEmail">Email address</label>
    <p><?php echo  $this->session->userdata('emailid'); ?></p></h4> 
    
    <div  class="form-group" align="center">
     <input type="submit" name="edit" class="btn btn-primary" value="Edit" align="center" style="padding: 7px 20px 7px 20px; font-size:90%;"></div> </h3>
    </div>
</form>