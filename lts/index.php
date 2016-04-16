<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title> Log In LTS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --> 
	 <link href="css/signin.css" rel="stylesheet"> 
  
</head>
<body>
  <div class="container">  
  <table width="391" height="309" border="1" align="center" class="table-responsive table-striped table-bordered">
  <tr>
    <td> 
  
<!-- role="form" -->
      <form class="form-signin" method="post" action="pengelola_check_login.php">
        <h2 class="form-signin-heading"><center> <i class="fa fa-lock"></i> Si LTS </center></h2>
		<h4> <center><?php
			if (isset($_GET['status'])) {
				echo "Username dan Password salah !!!";
			}
		?></center></h4>
		<br>
		<input name="username" id="username" type="input" class="form-control" placeholder="Username" autofocus><br>
		 <input name="password" id="password" type="password" class="form-control" placeholder="Password">
		        
        <button class="btn btn-lg btn-danger btn-block" type="submit">Log In</button>
		
      </form> 
	  </td> 
	  </tr>
</table>
    </div> <!-- /container -->
     
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 	 
</body>
</html>