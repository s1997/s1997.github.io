    <?php
    session_start();
    include('connection.php');
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    mysql_query("INSERT INTO member(name, username, password)VALUES('$name', '$username', '$password')");
    ?>
<meta http-equiv="refresh" content="0; url=../index.html?remark=success">
    <?php
    mysql_close($con);
    ?>