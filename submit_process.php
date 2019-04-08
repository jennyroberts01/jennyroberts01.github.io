<mailSettings>
  <smtp deliveryMethod="Network" from="yourfromaddress@email.com">
    <network host="127.0.0.1" port="25" />
  </smtp>
</mailSettings>


    
<?php
if(empty($_SESSION)) // if the session not yet started 
   session_start();
   
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

	
//Check if name  has been provided
if(empty($_POST[name])){
	$nameErr = "Please enter your name";
     $_SESSION['nameErr'] = $nameErr;
}

//Check if email  has been provided
if (empty($_POST['email'])) {
    $emailErr = "Email address required";
    echo $emailErr;
    $_SESSION['emailErr'] = $emailErr;
	  }
  // check if e-mail address is well-formed
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    $_SESSION['emailErr'] = $emailErr;
    }


//Check if institute  has been provided
if(empty($_POST[institute])){
	$instituteErr = "Please enter the name of your institute";
     $_SESSION['instituteErr'] = $instituteErr;
	}	

  // Check if instrumentmodel  has been provided
    if (empty($_POST[Instrumenttype])) {
      $InstrumenttypeErr = "Please select an instrument type"; 
    $_SESSION['InstrumenttypeErr'] = $InstrumenttypeErr;
    }

  // Check if InstCode  has been provided
    if (empty($_POST[InstCode])) {
      $InstCodeErr = "Please include the installation code."; 
    $_SESSION['InstCodeErr'] = $InstCodeErr;
    }

//Check if SN  has been provided
if(empty($_POST[SN])){
	$SNErr = "Please enter the SN number of your instrument";
     $_SESSION['SNErr'] = $SNErr;
}	

echo $_SESSION['nameErr'] . "<br>" ;
echo $_SESSION['emailErr'] . "<br>" ;
echo $_SESSION['SNErr'] . "<br>" ;
echo $_SESSION['instituteErr'] . "<br>" ;	
	
if (empty($nameErr) AND empty($emailErr) AND empty($instituteErr) AND empty($SNErr)  ){


      
}else {
header("Location: index.php");}

  
?>

