<?php
                                    
        if(isset($_POST['submit']))
        {
         include 'config.php';
         $username = $_POST['username'];
         $pass = md5($_POST['password']);
         $sql = "SELECT EMAIL,USERNAME,pass FROM user WHERE USERNAME='$username' OR EMAIL='$username' AND pass='$pass'";
         $result = mysqli_query($conn,$sql) or die("Error in query");
         if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION["username"] = $row['USERNAME'];
                $_SESSION["email"] = $row['EMAIL'];
                $_SESSION["pass"] = $row['pass'];
                header("location:https://smartsocialbook.net/smartbook1/home.php");

                
            }
         }
        }

                                    
?>