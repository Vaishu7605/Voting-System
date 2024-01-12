 <?php

    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    // if($password==$cpassword){
    //     move_uploaded_file($tmp_name, "../uploads/$image");
    //     $insert = mysqli_query($connect,"INSERT INTO voter list (name, mobile, password, address, phpto, role, status, votes ) 
    //     VALUES ('$name','$mobile','$password','$address','$image','$role',0,0)");
    // }
    // else{
    //     echo '
    //     <script>
    //     alert("Password and Confirm password does not match");
    //         window.location = "../Routes/register.html";
    //     </script>
    //     ';
    // }


if ($password!=$cpassword){
    echo '<script>
    alert("Password do not match !!! ");
    window.location="../routes/registeration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql = "insert into `user` (name,mobile,password,address,photo,role,status,votes) values ('$name','$mobile','$password','$address','$image'
    ,'$role',0,0)";

    $result = mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Successfull...");
        window.location="../index.php";
        </script>';

    }
}

?> 
