 <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = $msg = "";







function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);

  }
}

  if (empty($_POST["msg"])) {
    $msg = "";
  } else {
    $msg = test_input($_POST["msg"]);



      echo "<h1 style='background-color: green'>Votre mail a bien eté envoyé<h1>";
       $email = 'redfishaw@gmail.com';
       $message = $_POST['name'];
       $comment = '' .$comment."\r\n"; 
       $headers = 'from:'.$message."\r\n";
       $dmsg = '' .$_POST["msg"]."\r\n";
    mail($email, $comment, $dmsg, $headers);
    }
  


    

  

   
?>