
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/mail.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!--link css perso qui permet daffiner et de completer bootstrap-->
  <link rel="stylesheet" type="text/css" href="css/mail.css">
  <!-- link css de bootstrap d'originie -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Mail-Sender</title>
</head>

<?php include_once 'mail.php'; ?>

<body>
<div class="container-fluid">

<header class="col-lg-12">	
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p><label> eMail Du destinataire:    <h1  type="text" name="email">Shambhalafm</h1></label></p>
<p><label>  adresse de l'expediteur: <input  type="text" name="name"></input></label></p>
<p><label>  Object: <input  type="text" name="comment"></input></label></p>
<p><label> message: <input class="msg"  type="textarea" name="msg"></input></label></p>



<p><input class="send" type="submit" /></p>
</form>

</div>
</header>
	<section class="col-md-4 offset-2">
		<p><label>  Pieces Jointe: <input class="exp" type="text" name="comment"></input></label></p>
		<img class="img-responsive" height="150px" width="150px" src="donald_duck.png">
		</section>







</body>

</html>
