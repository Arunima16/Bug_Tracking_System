<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <h1>Admin</h1>
    </nav>

    <h1>Admin</h1>
    <?php 
    include "connect.php";
    session_start();
    $sql="SELECT * FROM user WHERE type='ADM'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
while($row=mysqli_fetch_assoc($result)){
echo "<div class='check_users'>";
echo "<h2>{$row['name']}</h2>";
echo "<h4>Email : {$row['email']}</h4>";
echo "<h4>Username  : {$row['username']}</h4>";
echo "</div>";
}
?>
<h1>Developer</h1>
    <?php 
    $sql="SELECT * FROM user WHERE type='DEV'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
while($row=mysqli_fetch_assoc($result)){
echo "<div class='check_users'>";
echo "<h2>{$row['name']}</h2>";
echo "<h4>Email : {$row['email']}</h4>";
echo "<h4>Username  : {$row['username']}</h4>";
echo "</div>";
}
?>
<h1>QA</h1>
    <?php 
    $sql="SELECT * FROM user WHERE type='QA'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
while($row=mysqli_fetch_assoc($result)){
echo "<div class='check_users'>";
echo "<h2>{$row['name']}</h2>";
echo "<h4>Email : {$row['email']}</h4>";
echo "<h4>Username  : {$row['username']}</h4>";
echo "</div>";
}
?>
</body>
</html>