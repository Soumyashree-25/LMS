<?php
    session_start();
    $db_hostname="localhost";
    $db_username="root";
    $db_password="Soumyashree@25";
    $db_name="lms";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    if(!$conn){
        echo "Failed to connect to MYSQL !. Please contact the admin.";
        return;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql=" Select * from users where email='$email' AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(!$result) {
            echo "Error :".mysqli_error($conn);
            exit();
        }

    $row=mysqli_fetch_assoc($result);
        ?>
        <script>
            alert("Logging in..");
        </script>
        <?php
        if($row){
            
            
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['firstname'];
            echo "Hello ".$row['firstname']."<br/>";
            
            
            header("Location:Lms.php");
            
            if(!isset($_SESSION['id'])){
                header("location:Lms.php");
                die();
            }
        }
        else{
            echo "Login Failed";
        }

    mysqli_close($conn);
?>
