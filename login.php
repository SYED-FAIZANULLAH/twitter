<?php
$error1="";
$error2="";
$error3="";
if(isset($_GET['e1']))
{
    $error1="enter username";
}
if(isset($_GET['e2']))
{
    $error2="enter password";
}
if(isset($_GET['e3']))
{
    $error3="invalid credentials";
}
?>


<!DOCTYPE html>
<html>
<head>   
<style type="text/css">

body {
  font-family: Arial;
  font-size: 17px;
  /*width:100vh;*/
  margin:0px;
/*height:100vh;*/
}

span
{
   color:red;
}
.container {
  background-image:url("image1.jpg");
  background-size:cover;
  background-repeat:no-repeat;
  width:100vw;
  height:100vh;
  
}

.container .content {
    padding: 40px;
    border-radius: 15px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); 
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color:white;

}
    input
    {
        border-radius: 10px;
    }
</style>
</head>
<body>
    <div class="container">
    
    <div class="content">
    <form method="POST" action="">
        <table align="center">
        <caption><h3>Twitter app</h3></caption>
            <tr>
                <td>USERNAME:</td>
                <td><input type="text" name="uname">
                <span>
                <?php echo $error1.$error3;?>
                </span>
                </td>
            </tr>
            <tr>
                <td>PASSWORD:</td>
                <td><input type="password" name="pwd">
                <span>
                <?php echo $error2;?>
                </span>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="submit"></td>
            </tr>
        </table>
    </form>
    </div>
</div>
</body>
</html>