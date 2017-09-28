<?php
// https://stackoverflow.com/a/768472
function redirect($url, $permanent = false) {
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    die();
}

if(isset($_POST['r'])){
    redirect('http://'.$_SERVER['HTTP_HOST'] . $_POST['r'], false);
}

?>

<html>
<body>

<form action="/index.php" method="POST">

<div>
  <label><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname">

  <label><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="passwd">

  <input type="hidden" name="r" value="<?php echo htmlentities($_GET['r']);?>">

  <button type="submit">Login</button>
</div>
</form>


</body>
</html>