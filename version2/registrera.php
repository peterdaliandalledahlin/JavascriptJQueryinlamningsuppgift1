<?php

$firstName = $lastName = $phone = $email = $password = $comment = $business = $radios = "";
        

            $firstName = $conn->real_escape_string($_POST['firstname']);
            $lastName = $conn->real_escape_string($_POST['lastname']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);
            $comment = $conn->real_escape_string($_POST['comment']);
            $business = $conn->real_escape_string($_POST['business']);
            $radios = $conn->real_escape_string($_POST['radios']);
            $alert_message = 'Registreringen lyckades';
        
            $hashed = password_hash($password, PASSWORD_BCRYPT);
          
            $sql = "INSERT INTO contact_form_info (firstname, lastname, phone, email, password, comment, business, radios)
            VALUES ('$firstName', '$lastName', '$phone', '$email', '$hashed', '$comment', '$business', '$radios')";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('$alert_message');</script>";
                //echo "Registreringen lyckades!";
                header('Refresh: 3; url=index.php');
                //echo "Registreringen lyckades!";
                //header("Location: index.html");
        
            } else {
                echo "Något gick fel...: " . $sql . "<br>" . $conn->error;
            }
        
            $conn->close();



?>