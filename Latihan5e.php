<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

<?php
$correctUsername = 'admin';
$correctPassword = '12345';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

  
    if ($username === $correctUsername && $password === $correctPassword) {
        
        header('Location: Latihan5e_adm.php');
        exit;
    } else {
     
        $error = 'Username atau password salah.';
    }
}
?>

<form action="" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br>

  <label for="password">Password:</label>
  <input type="password" name="password" required><br>

  <input type="submit" value="Login">
</form>

<p style="color: red;"><?php echo $error; ?></p>

</body>
</html>