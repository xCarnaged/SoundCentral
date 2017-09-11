    <!doctype html>  
    <html>  
    <head>  
    <title>Register</title>  
        <style>   
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }
.register { 
    position: absolute;
    top: 40%;
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
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }


        </style>  
    </head>  
    <body>  
         
         <center><h1>Register</h1></center>    
            <div class="register">
                 <form action="" method="POST">
                 <input type="text" name="first" placeholder="Firstname" required="required" />
                 <input type="text" name="last" placeholder="Lastname" required="required" />
                 <input type="text" name="middle" placeholder="Middle Initial" required="required" />
                 <input type="text" name="email" placeholder="Email" required="required" />
                 <input type="text" name="user" placeholder="Username" required="required" />
                 <input type="password" name="pass" placeholder="Password" required="required" />
                 <button type="submit" class="button" name="submit">Register</button>
                 <p>Continue to <a href="login.php">Login?</a></p>
                 </form>
            </div>  
  
    <script src="js/index.js"></script> 
    </form> 
    <?php
    
    require 'database.php';

    if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['first']) && !empty($_POST['last']) && 
       !empty($_POST['middle']) && !empty($_POST['email'])):

    /*$sql = "INSERT INTO customerlist (firstname, middleinitial, lastname, email, username, password) 
            VALUES (:first, :middle, :last, :email, :user, :pass)";*/

    $stmt = $conn->prepare("INSERT INTO customerlist (firstname, middleinitial, lastname, email, username, password) 
            VALUES (:first, :middle, :last, :email, :user, :pass)");
    $stmt = bindParam(':first', $_POST['first']);
    $stmt = bindParam(':middle', $_POST['middle']);
    $stmt = bindParam(':last', $_POST['last']);
    $stmt = bindParam(':email', $_POST['email']);
    $stmt = bindParam(':user', $_POST['user']);
    $stmt = bindParam(':pass', password_hash($_POST['pass'], PASSWORD_BCRYPT));
    if( $stmt->execute() ):
        die('Succes');
    else: 
        die('Fail');
    endif;

endif;
    


    /*if(isset($_POST["submit"])){  
    if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['middle']) && !empty($_POST['email'])){  
        $user=$_POST['user'];  
        $pass=$_POST['pass']; 
        $first=$_POST['first'];
        $middle=$_POST['middle'];
        $last=$_POST['last']; 
        $email=$_POST['email'];
        $con=mysql_connect('localhost','root','Database1234567890') or die(mysql_error());  
        mysql_select_db('sound_system_rental') or die("cannot select DB");  
      
        $query=mysql_query("SELECT * FROM customerlist WHERE username='".$user."'");  
        $numrows=mysql_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO customerlist(FirstName,MiddleName,LastName,Email,UserName,Password) VALUES('$first','$middle','$last','$email','$user','$pass')";  
      
        $result=mysql_query($sql);  
            if($result){  
        echo "Account Successfully Created"; 
        } else {  
        echo "Failure!";  
        }  
      
        } else {  
        echo "That username already exists! Please try again with another.";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    } */
    ?>  
    </body>  
    </html>   