<!-- Insert Contacts To Database -->
<?php
   $servername = "localhost";
   $username = "id18953190_root";
   $password = "1L/{e4t*&4uMlxO3";
   $dbname = "id18953190_amc_db";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $mem_user = $_POST['username'];
    $mem_pass = $_POST['password'];

    $query = "Select * from tbl_login Where Username = '$mem_user' and Password = '$mem_pass'";
    $res = mysqli_query($conn,$query);
    $count = mysqli_num_rows($res);
    if($count>0){
        echo "<script> window.location.href='../html/home.php';
        alert('Welcome $mem_user');
        </script>";
    }else{  
        echo "<script> window.location.href='../index.php';
        alert('Invalid Username or Password');
        </script>";  
    }
?>
