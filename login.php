<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }
.login { 
    position: absolute;
    top: 30%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}
body{
    background-color: #f5cba7
}
h1{
    font-family: 'PT Mono', monospace;
    text-align: center;
}
button{
    background-color: #555555; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}
input { 
    width: 100%; 
    margin-bottom: 10px; 
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 10px;
    font-size: 13px;
    color: black;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}
form{
  width: 100%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background-color: white;
  border-radius: 0px 0px 10px 10px;
  opacity: 0.75;
  border-radius: 30px;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }


</style>  
</head>  
<body>  
  <div class="login">
    <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <p>Not a member yet?<a href="register.php"> Register Now</a></p>
        <button type="submit" class="button" name="submit">Login</button>
    </form>
</div>  
  
    <script src="js/index.js"></script> 
    </form>  
<?php  

    require 'database.php';
/*if(isset($_POST["submit"])){  
  
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
  
        $con=mysql_connect('localhost','root','Database1234567890') or die(mysql_error());  
        mysql_select_db('sound_system_rental') or die("cannot select DB");  
  
        $query=mysql_query("SELECT * FROM customerlist WHERE UserName='".$user."' AND Password='".$pass."'");  
        $numrows=mysql_num_rows($query);  
        if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['UserName'];  
    $dbpassword=$row['Password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser 
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  */
?>  
</body>  
</html>