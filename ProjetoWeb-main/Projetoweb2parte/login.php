<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];

if(empty($username) || empty($password))
{
    echo '1';
    die();
}

$db = mysqli_connect('localhost','root','','bd') or die('Conexão falhada');

$uname = mysqli_real_escape_string($db, $username);
$pass = mysqli_real_escape_string($db, $password);

$query  = "SELECT * FROM user WHERE username = '$uname' and verification = 1";
$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) == 1)
{
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($pass, $row['password']))
        {
            $_SESSION['username'] = $uname;
            echo $uname;
            die();
        }
        else
        {
            echo '2';
            die();
        }
    }
}
else
{
    echo '2';
    die();
}


?>