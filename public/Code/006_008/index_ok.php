<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
    <!--  For IE only -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->




   <link rel="stylesheet" href="CSS/Bootstrap/css/bootstrap.min.css">
  <title>Register </title>
</head>

<body>

<script type="text/javascript" src= "CSS/Bootstrap/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src= "CSS/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src= "CSS/Bootstrap/js/jquery.validate.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
  //  alert("Welcome to JQuery");
  $("#registration_form").validate({
    rules :{
      verify_email_name : {
        required : true,
        email :true,
        equalTo:"#email_name"

      }
    }
  });
  })
</script>

 <div class="container">
  <div class="row">
    <div class="col-md-2  ">

    </div>
    <div class="col-md-8">
    <h1>Register </h1>


    <hr>


    <form class="form-horizontal required" name ="registration_form" id = "registration_form"
    action="doRegister.php" method="post">

    <?php
    if (isset($_SESSION['msg']))
     {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


      <div class="form-group">
          <label for="first_name" class="col-sm-2 control-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control required" id="first_name" name = "first_name" placeholder="first name">
          </div>
      </div>
      <div class="form-group">
          <label for="last_name" class="col-sm-2 control-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control required" id="last_name" name = "last_name"  placeholder="last name">
          </div>
      </div>

    <div class="form-group">
        <label for="email_name" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control required" id="email_name" name = "email_name" placeholder="user@example.com">
        </div>
    </div>
    <div class="form-group">
        <label for="verify_email_name" class="col-sm-2 control-label">verify Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control required email" id="verify_email_name" name = "verify_email_name" placeholder="user@example.com">
        </div>
    </div>

        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control required" id="password" name = "password" placeholder="Password">
            </div>
        </div>


    <div class="form-group">
      <label for="verify_password" class="col-sm-2 control-label">verify Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control required" id="verify_password" name = "verify_password" placeholder="Password">
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>

<form   method="get">
  <input type="text" name="first_name_t" >
  <input type="submit" value="submit" >
</form>

    </div>
    <div class="col-md-2">

    </div>

  </div>

</div>
</body>

</html>