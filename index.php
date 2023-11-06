<?php
require_once "Data.php";
require_once "function.php";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$city = $_POST['city'];
?>
<style>
    body{
        background-color: wheat;
    }
</style>
<body>
<?php
echo "<h1>Congratulations! Registration Successful for Goa Trip.</h1>";

$pdo = connectToDb();

echo '<h2>Our Registered Customers :</h2> '; 
insert($pdo,'trip',$_POST); 
selectAll($pdo, 'trip','Data');

echo'<br>';
echo 'Fill up one More form '?>
<a href="form.html">Back</a>
</body>