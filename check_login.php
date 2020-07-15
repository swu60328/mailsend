<?php 
session_start();
        if(isset($_POST['uname'])){
				//connection
                $con= mysqli_connect("localhost","root","","test") or die("Error: " . mysqli_error($con));
                #mysqli_query($con, "SET NAMES 'utf8' "); 
				//รับค่า user & password
                  $Username = $_POST['uname'];
                  $Password = $_POST['pass'];

                  echo $Username ; 
				//query 
                  $sql="SELECT * FROM user Where Name='". $Username."' and password='".$Password."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                    
                    
                    echo "<script>";
                    echo "alert(\" user หรือ  password ถูกต้อง\");"; 
                    echo "window.history.back()";
                   # echo $Username;
                    #echo $Password;
                    echo "</script>";
                      #$row = mysqli_fetch_array($result);
                    
                      #$_SESSION["UserID"] = $Username;
                      $_SESSION["User"] = $Username  ." ";

                      Header("Location: logged.php");
                      #$_SESSION["Userlevel"] = $row["Userlevel"];
 
                      #if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                       # Header("Location: admin_page.php");
 
                      #}
 
                      #if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                       # Header("Location: user_page.php");
 
                      #}
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                        echo "</script>";
 
                  }
 
        }else{
 
 
             #Header("Location: login.html"); //user & password incorrect back to login again
 
        }
?>