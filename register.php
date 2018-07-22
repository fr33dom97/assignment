
<?php

define('Title','Register');
require ('header.php');


echo"<h1>Register Form</h1>
    <p>Register so that you can take advantage of certain features like this, that , and the other thing </p>";

echo"<style type='text/css' media='screen'>.error{color:red;}</style>";

if (isset($_POST['submitted'])){
    $problem=FALSE;

    if (empty($_POST['first_name'])){
        $problem=TRUE;
        echo"<p class='error'>Please enter your first name!</p>";
        
    }
    if (empty($_POST['last_name'])){
        $problem=TRUE;
        echo"<p class='error'>Please enter your last name!</p>";
        
    }
    if (empty($_POST['email'])){
        $problem=TRUE;
        echo"<p class='error'>Please enter your email!</p>";
        
    }
    if (empty($_POST['password1'])){
        $problem=TRUE;
        echo"<p class='error'>Please enter a password!</p>";
        
    }
    if ($_POST['password1'] !=$_POST['password2'] ){
        $problem=TRUE;
        echo"<p class='error'>Password did not match with confirm password</p>";
        
    }
    if (!$problem){
        echo"<p>You are registered!<br>Okay,you are not really registered but...</p>";
        $_POST=array();
        
        
    }
    else{
        echo"<p class='error>Please try again!</p>";
    }
}
?>

<form action="register.php" method="post">
    <p>First name:<input type="text" name="first_name" size="20" value="<?php if(isset($_POST['first_name'])) {echo htmlspecialchars($_POST['first_name']);}?>"></p>
     <p>Last name:<input type="text" name="last_name" size="20" value="<?php if(isset($_POST['last_name'])) {echo htmlspecialchars($_POST['last_name']);}?>"></p>
     <p>Email Address:<input type="text" name="email" size="20" value="<?php if(isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);}?>"></p>
    <p>Password:<input type="password" name="password1" size="20"></p>
    <p>Confirm password:<input type="password" name="password2" size="20"></p>
    <p><input type="submit" name="submit" value="Register!"></p>
    <input type="hidden" name="submitted" value="true">

    


</form>

<?php require ('footer.php');
        
?>