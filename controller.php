<?php


    $username = $email=$password=$phone=$confirm_password= '';

    if(isset($_POST['submit'])){

        require('model.php');
        
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['phone'])){
            echo "All fields are manditory";
            die();
        }else{


        $username = htmlspecialchars($_POST['username']);

        //Check if username is one word
        if(strpos(trim($username), ' ') !== false){
            echo "Username can't contain spaces";
            die();
        }


        $email = htmlspecialchars($_POST['email']);

        //Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email";
            die();
        }

        $phone = htmlspecialchars($_POST['phone']);

        //Check phone number
        if(!preg_match("/^[0-9]{8}$/", $phone)) {
           echo "Invalid phone number";
           die();
        }

        $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));

        //Check password lenght
        if(strlen(trim($_POST['password'])) < 8){
        echo"Password lenght must be at least eight characters";
        die();
        }

        echo "Register info gathered ";
        echo "Your username is: ".$username." ";


        $sql = "INSERT INTO users_info (`username`, `password`, `email`, `phone` ) 
            VALUES ('$username', '$password', '$email', '$phone' )";
        
        if(empty($sql)){ echo "Couldnt write the sql"; }

        // $conn->query($sql);
        // echo "Affected rows: ".mysqli_affected_rows($conn)."";

        if($conn->query($sql)){
            echo "Affected rows: ".mysqli_affected_rows($conn)."";
        }else{
            echo "Inserting into database FAILED!";
            die('Could not enter data: ' . mysqli_error( $conn ));            
        }
        
      
        echo "Registered "; 
        
        $conn->close();

        echo "Connection closed";
        
        }
      }

  
    

    

    

        