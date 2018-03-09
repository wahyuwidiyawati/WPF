<?php
	include("login.php");
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$login = new login($user,$pass);
		$login->pengguna();
	}	
?>
<html>
  <head>
    <title>sign in</title>

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

  </head>
  
	<form method="POST">
  
    <div class="navbar">
        <div class="navbar-inner">
         
                <a class="brand" span class="first"></span> <span class="second">Finance Company of GKJW Purwosari</span></a>
        </div>
    </div>

        <div class="row-fluid">
		<div class="dialog">
        <div class="block">
		
            <p class="block-heading">Sign In</p>
            <div class="block-body">

                    <label>Username</label>
                    <input type="text" class="span12" placeholder="Masukkan Username">
                    <label>Password</label>
                    <input type="password" class="span12" placeholder="Masukkan Password">
                    <input type="submit" class="Input-btn btn-primary pull-right" name="login" value="Login"/>
            </div>
        </div>
		</form>
		</div>
		</div>
    </script>
  </body>
</html>