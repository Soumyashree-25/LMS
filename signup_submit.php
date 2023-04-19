<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="Soumyashree@25";
    $db_name="lms";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    if(!$conn){
        echo "Failed to connect to MYSQL !. Please contact the admin.";
        return;
    }
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phone_number'];

    // if(!isset($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$_POST['number'])){
    //     exit("Empty field(s)");
    // }

    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($phonenumber)){
        exit("Values can't be empty..");
    }
    if($stmt=$conn->prepare('SELECT id,password FROM users where email=?')){
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            ?>
            <script>
                alert( "User already exists...This email i'd is already registered with us.");
            </script>
            <?php
            // echo "Try again with another email id";
            header("Location:signup.php");
            return;
        }
        else{
            if($stmt=$conn->prepare('INSERT INTO users (firstname,lastname,email,password,phone_number)VALUES(?,?,?,?,?)')){
                $stmt->bind_param('ssssi',$firstname,$lastname,$email,$password,$phonenumber);
                $stmt->execute();
            ?>
                <script>
                    alert("REGISTRATION SUCCESSFUL.");
                </script>
                <?php
            }
            else{
                echo "Something went wrong.";
                return;
            }
        }
        $stmt->close();
    }
    else{
        echo "Error Ocuured";
    }
?>
    Click <a href="Lms.php">here</a> to continue.
        <?php
    $conn->close();
?>