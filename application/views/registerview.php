<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">

</head>
<body>
    <?php
        $msg = $this->session->flashdata('msg');
        if($msg != "") {
            echo "<div class='alert alert-success'> $msg </div>";
        }
    ?>
    <div class="container">
        
        <div class="col-md-6"> 
             <div class="card mt-5">
            <div class="card-header">
                Registration Form
            </div>
            <form action="<?php echo base_url(). 'index.php/Register/register'?>" name="registerForm" id="registerForm" method="post">
            <div class="card-body register">
            
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo set_value('fname')?>" class="form-control <?php echo (form_error('fname') != "") ? 'is-invalid' : '' ; ?>"  placeholder="Write your first name">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('fname')); ?></p>

        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo set_value('lname')?>" class="form-control <?php echo (form_error('lname') != "") ? 'is-invalid' : '' ; ?>" placeholder="Write your last name">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('lname')); ?></p>

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo set_value('email')?>" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '' ; ?>" placeholder="Write your E-mail id">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('email')); ?></p>

        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo set_value('password')?>" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '' ; ?>" placeholder="Write password">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('password')); ?></p>

        </div>

        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" name="contact" id="contact" value="<?php echo set_value('contact')?>" class="form-control <?php echo (form_error('contact') != "") ? 'is-invalid' : '' ; ?>" placeholder="Write your contact number">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('contact')); ?></p>

        </div>
        
        <div class="form-group">
            <button class="btn btn-block btn-primary"> Submit </button>

        </div>       
  </div>
  </form>
</div>
        </div>
    </div>
</body>
</html>