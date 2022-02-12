<?php      
    include('database.php');

    session_start();
    // $admin_name = $_POST['admin_name'];
    // $password = $_POST['password'];
    // $error = "";
    // $success = "";

    if(isset($_POST['insert'])){

        $email_id = $_POST['email_id'];  
        $password = $_POST['password'];  
        $error = "";
        $success = "";
    
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from `admin` WHERE `email_id` = '$email_id' and `password` = '$password'";   
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
          
        if($count == 1){ 
            echo "Login successful";
            $_SESSION['email_id'] = $row['email_id'];
            header('location:dashboard.php'); 
            die();
        }  
        else if($password != "password"){  
            $error="Login failed. Invalid username or password";
            // header('location:alogin.php');				
        }     
    }
?>  