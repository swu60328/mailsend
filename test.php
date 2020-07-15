<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$name = $_POST['Name'];
$dob = $_POST['DOB'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$password = $_POST['Pass'];
$Q1 = $_POST['Q_1'];
$Q2 = $_POST['Q_2'];
$Q3 = $_POST['Q_3'];
$Q4 = $_POST['Q_4'];
$Q5 = $_POST['Q_5'];




// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (Name, dob, email,phone,password,Q1,Q2,Q3,Q4,Q5)
VALUES ('$name', '$dob', '$email','$phone','$password','$Q1','$Q2','$Q3','$Q4','$Q5')";


#$sql = "INSERT INTO user (Name, dob, email,phone,password,Q1,Q2,Q3,Q4,Q5) 
#		VALUES ('".$_POST["name"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
#		,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."'
 #       ,'".$_POST["txtBudget"]."','".$_POST["txtBudget"]."','".$_POST["txtBudget"]."','".$_POST["txtBudget"]."')";
#	$query = mysqli_query($conn,$sql);




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php echo $_POST["Name"]; ?>
<?php echo $_POST["Name"]; ?>
<?php echo $_POST["Name"]; ?>
<?php echo $_POST["Name"]; ?>
<?php 
echo "<script>";
echo "alert(\" signup complete\");"; 
#echo "window.history.back()";

echo "</script>";
Header("Location: index.html");
 ?>