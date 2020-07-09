<?php

$fname_error = $lname_error = $company_error = $email_error = "";
$fname = $lname = $company = $email = $message = $success = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //first name check
    if(empty($_POST["first-name"])){
        $fname_error = "First name is required";
    }
    else{
        $fname = $_POST["first-name"];

        if(!preg_match("/^[a-zA-Z ]+$/", $fname)){
            $fname_error = "Only letters";
        }
    }
    //last name check
    if(empty($_POST["last-name"])){
        $lname_error = "Last name is required";
    }
    else{
        $lname = $_POST["last-name"];

        if(!preg_match("/^[a-zA-Z ]+$/", $lname)){
            $lname_error = "Only letters";
        }
    }
    //company check
    if(empty($_POST["company"])){
        $company_error = "Company name is required";
    }
    else{
        $company = $_POST["company"];
    }
    //email check
    if(empty($_POST["email"])){
        $email_error = "Email is required";
    }
    else{
        $email = $_POST["email"];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Please enter a valid email";
        }
    }
    //message change
    if(!empty($_POST["message"])){
        $message = $_POST["message"];
    }

    if($fname_error == "" and $lname_error == "" and $company_error == "" and $email_error){
        $message_to_me = "";
        
        
        foreach($_POST as $key => $value){
            $message_to_me .= "$key: $value\n";
        }

        $to = "justmatt6@hotmail.com";
        $subject = "Contact Form";


        if(mail($to, $subject, $message_to_me, "From: justmatt6@hotmail.com")){
            $success = "Thank you for reaching out, I will get back to you within 48 hours!";
        }
        else{
            $success = "Unsuccessful, recheck the forum";
        }

        $fname = $lname = $company = $email = "";
    }


    
}




?>