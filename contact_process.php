<html> 
<head> 
<head>
    <meta name="viewport" content="width=device-width, initial scale=1">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <link rel="stylesheet" href="assets\style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.min.js"> </script>
    <script src="bootstrap\jquery\jquery.min.js"> </script>
    <script src="bootstrap\popper\popper.min.js"> </script>
    <title> Contracts|Ferdous Parvez</title>
    <style>
       #n a{
            font-family:Arial;
            color: white;
            font-size: 20px;
            
        }
        #n a:hover{
            background-color: black;
        }
        td{
            width: 20%;
            text-align: center;
            vertical-align:middle;
        }
        #dr{
            background: black;
        }
		
		
    </style>
</head> 

<body> 


	<img src="assets\header.jpg" height="200px" width="100%">

      <nav class="navbar navbar-expand-sm bg-success navbar-dark justify-content-center " style="margin-top: 0px;" id="n">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link " href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="personal.html">Personal</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="education.html">Education</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="trainings.html">Trainings</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="expriences.html">Expriences</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="projects.html">Projects Gallery</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="contracts.html">Contract</a>
              </li>
              <li class="nav-item active">
                  <a target="_blank" class="nav-link" href="assets\Resume_Ferdous_parvez_Diploma(computer).pdf" id="dr">Download Resume</a>
              </li>
          </ul>
      </nav>

    <br/> <br/> 
	<h1 style="text-align: center;"> ...Thanks...</h1> 
	<h1 style="text-align: center;"> Mr./Mrs. <?php echo $_POST['name']; ?>, I just received your message.</h1> 
    <h2 style="text-align: center;"> I'll contact you very soon, Don't forget to check your mail. (<?php echo $_POST['email']; ?>) </h2>
    <p style="text-align: center;"> <a href="index.html" style="font-size: 25px;"> <b> Back to site </b></a></p>
	<br/> <br/> <h3 style="text-align: center;"> Note:  This form will work in online server, but not in offline, cause  there is no mail server in localhost; Thanks mam..!</h3>
    <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
</body> 	
</html>
<?php
    
    $to = "ferdousparvez@yahoo.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['mobile'];
    $message = $_POST['comment'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Message from portfolio site";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "<td style='border:none;'><strong>Mobile:</strong> {$number}</td>";
	$body .= "</tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>