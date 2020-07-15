<?php 
session_start();
$question = array($_POST["Q_1"],$_POST["Q_2"],$_POST["Q_3"],$_POST["Q_4"],$_POST["Q_5"]);
echo print_r($question);
echo count($question);
echo $question[0];
#echo $_SESSION['User'];
        if(count($question) == 5){
				//connection
                $con= mysqli_connect("localhost","root","","test") or die("Error: " . mysqli_error($con));
                #mysqli_query($con, "SET NAMES 'utf8' "); 
				//รับค่า user & password
                  $Username = $_SESSION['User'];
                  #$Password = $_POST['pass'];

                  echo $Username ; 
				//query 
                  $sql="SELECT Q1,Q2,Q3,Q4,Q5 FROM user Where Name= '$Username'";
 
                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $q1 = $row["Q1"];
                        $q2 = $row["Q2"];
                        $q3 = $row["Q3"];
                        $q4 = $row["Q4"];
                        $q5 = $row["Q5"];
                        $ans_q = array($q1,$q2,$q3,$q4,$q5);
                        print_r($ans_q);
                        $i = 0;
                        $c = 0;
                        foreach($question as $x ) {
                           
                            if($x == $ans_q[$i]){
                            $c++;
                            echo "c : $c <br>" ;
                            echo "$x == '$ans_q[$i]' <br>";
                            }
                            $i++;
                            echo "i : $i <br>";
                          }
                        if ($c == 5 ) {
                                    
                            echo "<script>";
                            echo "alert(\" คำตอบถูกต้อง\");"; 
                            #echo "window.history.back()";
                            echo "</script>";
                            Header("Location: true.php");
                        }else{
                            echo "<script>";
                            echo "alert(\" คำตอบไม่ถูกต้อง\");"; 
                            #echo "window.history.back()";
                            echo "</script>";
                            Header("Location: false.php");
                        }
                       /* echo($q1);
                        echo($q2);
                        echo($q3);
                        echo($q4);
                        echo($q5);*/
                       # echo "id: " . $row["Q1"]. " - Name: " . $row["Q2"]. " " . $row["Q3"]. "<br>";
                        






                    }
                } else {
                    echo "0 results";
                }
                    #echo $row['Q1'];
                  //if(mysqli_num_rows($result)==1){
                    
                    
                    //echo "<script>";
                    //echo "alert(\" user หรือ  password ถูกต้อง\");"; 
                    //echo "window.history.back()";
                   # echo $Username;
                    #echo $Password;
                    //echo "</script>";
                      #$row = mysqli_fetch_array($result);
                    
                      #$_SESSION["UserID"] = $Username;
                      $_SESSION["User"] = $Username  ." ";

                      #Header("Location: logged.php");
                      #$_SESSION["Userlevel"] = $row["Userlevel"];
 
                      #if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                       # Header("Location: admin_page.php");
 
                      #}
 
                      #if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                       # Header("Location: user_page.php");
 
                      #}
 
                  //}else{
                    //echo "<script>";
                       // echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                      //  echo "window.history.back()";
                    //    echo "</script>";
 
                  //}
 
        }else{
 
 
             #Header("Location: login.html"); //user & password incorrect back to login again
 
        }
?>