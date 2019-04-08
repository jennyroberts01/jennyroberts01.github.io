<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">




    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet'>
<style>



      
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php  
if(empty($_SESSION)){// if the session not yet started 
	$nameErr = ""; //password error reset
	$_SESSION['nameErr'] = $nameErr;
	$emailErr = ""; //email error reset
    $_SESSION['emailErr'] = $emailErr;
	$instituteErr = ""; //institute error reset
    $_SESSION['instituteErr'] = $instituteErr;
	$SNErr = ""; //SN error reset
    $_SESSION['SNErr'] = $SNErr;
	$InstrumenttypeErr = ""; //Instrumenttype error reset
	$_SESSION['InstrumenttypeErr'] = $InstrumenttypeErr;
	$InstCodeErr = ""; //InstCode error reset
	$_SESSION['InstCodeErr'] = $InstCodeErr;
} 
   session_start();

	
	?>


<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container2">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ><img src="photos/Thermo_logo.png" style="height:24px;"> </a> 
             <a class="navbar-brand" >Thermo Element License</a>
            </div>



            
        <!-- /.container -->
        </div>
    </nav>


    <!--Content Section -->
 <div class="container2">
<form method = "post" id="form1">
	
 <div class="form-group">
     <div class="row">
    <label >Instrument</label>
    <select class="form-control"  name="instrument">
          <option value="Element2">Element 2</option>
          <option value="ElementXR">Element XR</option>
          <option value="ElementGD">Element GD</option>
    </select>
  </div>
	</div>

	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" placeholder="Joe Smith" name="name"><div style="color:red"><?php echo $_SESSION['nameErr'];?></div></span>
  	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" id="email" placeholder="joe.smith@gmail.com" name="email"><div style="color:red"><?php echo $_SESSION['emailErr'];?></div></span>
  	</div>
	
	<div class="form-group">
		<label for="name">Institute</label>
		<input type="text" class="form-control" id="institute" placeholder="Smith Institute" name="institute"><div style="color:red"><?php echo $_SESSION['instituteErr'];?></div></span>
  	</div>	
	
	<div class="form-group">
		<label for="SN">Instrument SN</label>
		<input type="text" class="form-control" id="SN" placeholder="SN09209D" name="SN"><div style="color:red"><?php echo $_SESSION['SNErr'];?></div></span>
  	</div>	

	<div class="form-group">
		<label for="InstCode">Installation Code</label>
		<input type="text" class="form-control" id="SN" placeholder="1A2C-3D45-67F8-7559-AA80-A32A-D1E8-007F" name="SN"><div style="color:red"><?php echo $_SESSION['InstCodeErr'];?></div></span>
  	</div>	

<div class="form-group">
 
    <label for="Instrumenttype">Instrument Model</label>
    <select class="form-control" id="Instrumenttype" name="Instrumenttype">
		<option value="">Select instrument model</option>
          <option value="Element2">Element 2</option>
          <option value="ElementXR">Element XR</option>
          <option value="ElementGD">Element GD</option>
    </select>
	<div style="color:red"><?php echo $_SESSION['InstrumenttypeErr'];?></div>
  </div>


<button type="submit" formaction="submit_process.php" name = "submit" class="btn btn-primary ">Submit</button>

</form>

	
</div>	




 
			
    <!-- Useful scripts Section -->
  <!--  <section id="useful" class="useful-section">
      <img class="img-responsive2" src="photos/squid.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Additional Info</h3>
<p><weak>
<div class="b">
Placeholder

</ul> </div>

            	</div>
            </div>
        </div>
    </section>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
