<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Laboy Baboy Tours</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
		body{
			background: #ff99cc;
		}

		.login-container {
		  width: 100%;
		  height: 100%;
		  position: relative;
		}

		.login {
		  width: 400px;
		  position: fixed;
		  color: #fff;
		}

		.login.center {
		  transform: translateX(-50%) translateY(-50%);
		  left: 50%;
		  top: 50%;
		}

		.login-container .background {
		  width: 100%;
		  height: 100%;
		  position: fixed;
		  background-color: #fff;
		}

		#laboy-logo{
			display:block;
			vertical-align: middle;
			text-align: center;
		}

		.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    	background-color: #ff99cc !important;
		}

    </style>
</head>
<body>
<center><img src="img/biglogo.png" id="laboy-logo"></center>
<div class="login-container">
<!--   <div class="background"></div> -->
  <div class="login center">
    <h3 class="title">
    </h3>
    <form>
      <div class="from-group">
        <label for="username" class="sr-only"></label>
        <input type="text" class="form-control" placeholder="username">
      </div>
      <p></p>
      <div class="from-group">
        <label for="password" class="sr-only"></label>
        <input type="password" class="form-control" placeholder="password">
      </div>    
      <p></p>
      <a href="#" button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
      <a href="index.html" button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-out"></span> Back</button>
    </form>
  </div>
</div>
<script type="text/javascript">
	
</script>

</body>
</html>