

<html>
    <head>
       
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <!--Stylesheet-->
        <style media="screen">
*,
*:before,
       
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
       }
body{
    background-color: rgb(214, 178, 206);
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #b31ab3,
        #e4888d
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #b31ab3,
        #e4888d
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #180606;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: white;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
       </style></head>    
       <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
       </div>
          <form action="login.php" method="POST">
            <h1>Login </h1>
             <div class="form-group">
               <label for="username">Username</label>
               <input type="text" name="username" class="form-control" placeholder="Email or Phone" required>
               
        
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
           <button>Login</button>
              <a href="register.php">Register Now</a>
          </form>
        <img src="meraki.jpeg" width="160" height="140" alt="Logo">
</html>
<?php
   
   session_start();
   include('meraki-db.php'); // Connect to database
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = $_POST['username'];
       $password = $_POST['password'];
       
       // Check credentials
       $query = "SELECT * FROM users WHERE username='$username'";
       $result = mysqli_query($conn, $query);
       $user = mysqli_fetch_assoc($result);
       
       if ($user && password_verify($password, $user['password'])) {
           $_SESSION['username'] = $username;
           echo "<script>alert('Login successful'); window.location.href='order1.php';</script>";
       } else {
           echo "<script>alert('Failed to login. Please register.'); window.location.href='register.php';</script>";
       }
   }
   


