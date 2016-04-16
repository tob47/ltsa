<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="shortcut icon" href="upload/LOGO TBS.png">

    <title> Log In LTS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --> 
	 <link href="css/signin.css" rel="stylesheet"> 
	 <style>
          body { background:url(upload/t.jpg) #09C; background-repeat:no-repeat; 
		  background-size: 100% ;
		  
		  }  
        </style>
</head>
<body>  
  <table width="391" height="309" border="1" align="center" class="table-responsive table-striped table-bordered">
  <tr>
    <td> 
	 <div class="wraper">
<!-- role="form" -->
      <form class="form-signin" method="post" action="pengelola_check_login.php">
        <h2 class="form-signin-heading"><center><img class="responsive" src="upload/LOGO TBS.png"> LTS Apps</center></h2>
		<h4> <center><?php
			if (isset($_GET['status'])) {
				echo "Username dan Password salah !!!";
			}
		?></center></h4>
		<br>
		<input name="username" id="username" type="input" class="form-control" placeholder="Username" autofocus><br>
		 <input name="password" id="password" type="password" class="form-control" placeholder="Password">
		  <center>      
        <button class="btn btn-lg btn-danger " type="submit">Log In Admin</button>  	</center>
      </form> 
	  
	  </td> 
	  </tr>
</table>
 
	 </div> 
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 	 
</body>
</html>