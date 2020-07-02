44<?php
    include 'config.php';

    date_default_timezone_set('Asia/Tokyo');

    if (isset($_POST['register'])) {

        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $sei = $_POST['sei'];
        $mei = $_POST['mei'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $zipcode = $_POST['zipcode'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $registered_date = date("y/m/d H:i:s");
    
        $query="INSERT INTO customer(last_name,first_name,sei,mei,gender,birthday,age,zipcode,address,tel,email,password,registered_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssissssss",$last_name,$first_name,$sei,$mei,$gender,$birthday,$age,$zipcode,$address,$tel,$email,$password1,$registered_date);
    
        $stmt->execute();
    
        header('location:../list/list.php');
    }    

?>