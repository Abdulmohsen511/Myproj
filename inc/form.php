<?php

$firstName =  $_POST['firstName'];
$lastName =  $_POST['lastName'];
$email =  $_POST['email'];




if (isset($_POST['submit'])){

    $errors = array();

    

   
    //تحقق الاسم الاول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }

    //تحقق الاسم الاخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
    }

    //تحقق الايميل
    if(empty($email)){
        $errors['emailError'] = 'ادخل الايميل ';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = ' ادخل الايميل الصحيح';
    }

    //تحقق لايوجد اخطاء
    if(!array_filter($errors)){ 
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName =  mysqli_real_escape_string($conn,$_POST['lastName']);
        $email =  mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email)
        values ('$firstName','$lastName','$email') ";

        if(mysqli_query($conn, $sql)){
            header('location: index.php');
        }
        else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
 
}
