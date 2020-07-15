<?php 

session_start();
echo $_SESSION["User"];
$Username = $_SESSION["User"];
$con= mysqli_connect("localhost","root","","test") or die("Error: " . mysqli_error($con));
#require 'mailjet/mailjet-apiv3-php';
$sql="SELECT email FROM user Where Name='$Username'";
$result = mysqli_query($con,$sql);
#echo "<br> '$result' <br>";

$result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $email = $row["email"];
                        echo " <br><br> $email  <br><br>";
                        
                        echo "<script>";
                            echo "alert(\" mail already send\");"; 
                            #echo "window.history.back()";
                            echo "</script>";
                      
                        /* echo($q1);
                        echo($q2);
                        echo($q3);
                        echo($q4);
                        echo($q5);*/
                       # echo "id: " . $row["Q1"]. " - Name: " . $row["Q2"]. " " . $row["Q3"]. "<br>";
                        






                    }
                } else {
                    echo "<script>";
                            echo "alert(\" something wrong\");"; 
                            echo "window.history.back()";
                            echo "</script>";
                    echo "0 results";
                }

require 'vendor/autoload.php';
use \Mailjet\Resources;
$mj = new \Mailjet\Client('6903c51386f82ebb0b3ccf412af13ee3','c07dd391ad053f881ceb7d28f71e3eee',true,['version' => 'v3.1']);
$body = [
  'Messages' => [
    [
      'From' => [
        'Email' => "krittanut.sangsri@g.swu.ac.th",
        'Name' => "Krittanut"
      ],
      'To' => [
        [
          'Email' => $email,
          'Name' => "$Username"
        ]
      ],
      'Subject' => "GMP Confirm.",
      'TextPart' => "Please enter link below ",
      'HTMLPart' => "<h3>Dear $Username , Please go to <a href='http://localhost/test/check_q.php'>Here!</a> for answer your questions</h3><br />May force be with you!",
      'CustomID' => "AppGettingStartedTest"
    ]
  ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success() && var_dump($response->getData());

echo "<script>";
echo "window.history.back()";

echo "</script>";

?>
