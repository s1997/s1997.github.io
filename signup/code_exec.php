    <?php
    session_start();
    include('connection.php');
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $
    mysql_query("INSERT INTO member(name, username, password)VALUES('$name', '$username', '$password')");
    header("location: index.php?remarks=success");
    mysql_close($con);
    ?>