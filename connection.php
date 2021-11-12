<?php session_start();

    
    include('connect.php');

    if(isset($_POST['login']))  {

        $Username  =$_POST['username'];
        $Password   =$_POST['password'];

        $em = mysqli_real_escape_string($conn, $Username);
        $pass = mysqli_real_escape_string($conn, $Password);
        
        
        $query= mysqli_query($conn, "select * from users where Username='$em' and Password='$pass'")or die(mysqli_error());


        $row = mysqli_fetch_array($query);
                $name =$row['Username'];
                $count = mysqli_num_rows($query);
              //$id=$row['UserID'];
        

        if($count ==0){
            echo "<script type='text/javascript'>alert('Invalid Email or Password');
            document.location='login.php'</script>";
        }

        else{
        //  $_SESSION['UserID'] = $UserID;
            $_SESSION['username'] = $name;

            $query= mysqli_query($conn, "INSERT into tbllogin (Username, Password) values ('$Username', '$Password')") or die($mysqli->error()); //para wala ka register di ma save ang data

            echo "<script type='text/javascript'>alert('Login Succesfully');
            document.location='index.php'</script>";
        }

    }

?> 