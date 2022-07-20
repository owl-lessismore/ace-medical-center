<!-- Insert To Database Contacts -->
<?php
   $servername = "localhost";
   $username = "id18953190_root";
   $password = "1L/{e4t*&4uMlxO3";
   $dbname = "id18953190_amc_db";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $con_fullname = $_POST['fullname'];
    $con_email = $_POST['email'];
    $con_message = $_POST['message'];

    $query = "Insert into tbl_contact(FullName,Email,Message) values ('$con_fullname','$con_email','$con_message')";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script> window.location.href='../html/contact.php';
        alert('Messege Sent');
        </script>";    
    }
?>