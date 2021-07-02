<?php
    include_once 'dbcon.php';   

    if(isset($_POST['loginU'])){
        $user_type = $_POST['user_type'];
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];

        // echo $user_type;
        // echo $user_email;
        // echo $user_pass;
        // die();

        $query="SELECT * FROM `login_data` WHERE `user_email` = '$user_email' AND `user_pass` ='$user_pass' AND `user_type` = '$user_type';";

        $result=mysqli_query($con,$query);

        $num_row=mysqli_num_rows($result);

        $data=mysqli_fetch_assoc($result);

        if($user_type == 'dist' || $user_type == 'reta'){
            if($num_row < 1){
                echo '<script>
                alert("Invalid User or Password!!");
                </script>';
            }
            else{
                if($user_type == 'dist'){
                    session_start();
                    $_SESSION['u_id']=$data['login_id'];
                    $_SESSION['u_mail']=$data['user_email'];
                    $_SESSION['u_type']=$data['user_type'];

                    echo '<script>
                    alert("Login SuccessFull!!");
                    window.location.href="Distributer/dashbord.php";
                    </script>';
                }else if($user_type == 'reta'){
                    session_start();
                    $_SESSION['u_id']=$data['login_id'];
                    $_SESSION['u_mail']=$data['user_email'];
                    $_SESSION['u_type']=$data['user_type'];

                    echo '<script>
                    alert("Login SuccessFull!!");
                    window.location.href="Retailer/dashbord.php";
                    </script>';   
                }
            }
        }else{
            echo '<script>
                alert("Please Choose Your Type!!");
                </script>';
        }
    }

    // register a new user
    if(isset($_POST['regU'])){
        // user details
        $user_type = $_POST['user_type'];
        $user_name = $_POST['user_name'];
        $name_as_pan = $_POST['name_as_pan'];
        $user_mobile = $_POST['user_mobile'];
        $user_email = $_POST['user_email'];

        // address
        $user_state = $_POST['user_state'];
        $user_dist = $_POST['user_dist'];
        $user_pin = $_POST['user_pin'];
        $user_locality = $_POST['user_locality'];

        // id proof
        $pan_no = $_POST['pan_no'];
        $gst_no = $_POST['gst_no'];
        $add_p_type = $_POST['add_p_type'];
        $add_p_no = $_POST['add_p_no'];

        // file upload
        $pan_front = $_FILES["pan_front"]["name"];
        $pan_back = $_FILES["pan_back"]["name"];
        $add_front = $_FILES["add_front"]["name"];
        $add_back = $_FILES["add_back"]["name"];

        // file temp names
        $pan_front_tmp = $_FILES["pan_front"]["tmp_name"];
        $pan_back_tmp = $_FILES["pan_back"]["tmp_name"];
        $add_front_tmp = $_FILES["add_front"]["tmp_name"];
        $add_back_tmp = $_FILES["add_back"]["tmp_name"];

        $query = "INSERT INTO `user_data` (`user_id`, `user_type`, `user_name`, `name_as_pan`, `user_mobile`, `user_email`, `user_state`, `user_dist`, `user_pin`, `user_locality`, `pan_no`, `gst_no`, `add_p_type`, `add_p_no`, `pan_front`, `pan_back`, `add_front`, `add_back`, `create_at`) VALUES (NULL, '$user_type', '$user_name', '$name_as_pan', '$user_mobile', '$user_email', '$user_state', '$user_dist', '$user_pin', '$user_locality', '$pan_no', '$gst_no', '$add_p_type', '$add_p_no', '$pan_front', '$pan_back', '$add_front', '$add_back', current_timestamp())
        ";

        $path = "Admin/dataimages/".$pan_no;
        // echo $query;

        $query_data = "SELECT * FROM `user_data` WHERE `pan_no` = '$pan_no'";
        $result=mysqli_query($con,$query_data);

        $num_row=mysqli_num_rows($result);

        if($num_row > 0){
            echo '<script>alert("User Already Exist!!!")
                    </script>';
        }else{
            if(!is_dir($path."/")){
                if(mysqli_query($con,$query)){
                    mkdir($path."/");            
                    move_uploaded_file($pan_front_tmp, $path."/$pan_front");
                    move_uploaded_file($pan_back_tmp, $path."/$pan_back");
                    move_uploaded_file($add_front_tmp, $path."/$add_front");
                    move_uploaded_file($add_back_tmp, $path."/$add_back");
        
                    echo '<script>alert("Registation Successfull")
                    window.location.href=".";
                    </script>';
                }else{
                    echo '<script>alert("Registation Faileld")
                    </script>';
                }
            }else{
                if(mysqli_query($con,$query)){
                    move_uploaded_file($pan_front_tmp, $path."/$pan_front");
                    move_uploaded_file($pan_back_tmp, $path."/$pan_back");
                    move_uploaded_file($add_front_tmp, $path."/$add_front");
                    move_uploaded_file($add_back_tmp, $path."/$add_back");
        
                    echo '<script>alert("Registation Successfull")
                    window.location.href=".";
                    </script>';
                }else{
                    echo '<script>alert("Registation Faileld")
                    </script>';
                }
            }
        }                
    }
?>