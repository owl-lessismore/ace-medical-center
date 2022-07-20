<!-- Register and Save to Database -->
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
    $mem_email = $_POST['email'];

    $query_user = "Select * from tbl_login Where Username = '$mem_user'";
    $res_user = mysqli_query($conn,$query_user);
    $count = mysqli_num_rows($res_user);
    if($count>0){
        echo "<script> window.location.href='../index.php';
        alert('Username Already Used');
        </script>";
    }else{
        $query = "Insert into tbl_login(Username,Password,Email) values ('$mem_user','$mem_pass','$mem_email')";
        $res = mysqli_query($conn,$query);
        if($res){
            echo "<script> window.location.href='../index.php';
                 alert('Successfully Registered');
                 </script>";    
        }
    }
?>