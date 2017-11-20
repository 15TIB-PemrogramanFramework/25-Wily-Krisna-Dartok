<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Catalog Online</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="<?= base_url();?>/Login_Asset/css/style.css">

  
</head>

<body>
  <div class="form">
    <p class="forgot"><a href="<?= site_url('Welcome/index');?>">< Back</a></p>
    <ul class="tab-group">
      <li class="tab"><a href="<?= site_url('signup');?>">Sign Up</a></li>
      <li class="tab active"><a href="<?= site_url('login');?>">Log In</a></li>
    </ul>
    <div id="login">   
      <h1>Log-in Your ID!</h1>

      <form action="" method="post">

        <div class="field-wrap">
          <input type="text" placeholder="Username"required autocomplete="off" name="username"/>
        </div>

        <div class="field-wrap">
          <input type="password" placeholder="Password" required autocomplete="off" name="password"/>
        </div>

        <button class="button button-block"/>Log In</button>

      </form>

    </div>
    <!-- tab-content -->

  </div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/index.js"></script>

</body>
</html>