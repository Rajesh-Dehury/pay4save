<?php
    include_once 'dbcon.php';   

       // register a new user
    if(isset($_POST['regU'])){
        // user details
        $user_type = $_POST['user_type'];
        $user_name = $_POST['user_name'];
        $name_as_pan = $_POST['name_as_pan'];
        $user_mobile = $_POST['user_mobile'];
        $user_email = $_POST['user_email'];

        // pass
        $user_c_pass = $_POST['user_c_pass'];

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

        $query = "INSERT INTO `user_data` (`user_id`, `user_type`, `user_name`, `name_as_pan`, `user_mobile`, `user_email`, `user_pass`,`user_state`, `user_dist`, `user_pin`, `user_locality`, `pan_no`, `gst_no`, `add_p_type`, `add_p_no`, `pan_front`, `pan_back`, `add_front`, `add_back`, `create_at`) VALUES (NULL, '$user_type', '$user_name', '$name_as_pan', '$user_mobile', '$user_email', '$user_c_pass','$user_state', '$user_dist', '$user_pin', '$user_locality', '$pan_no', '$gst_no', '$add_p_type', '$add_p_no', '$pan_front', '$pan_back', '$add_front', '$add_back', current_timestamp())
        ";

        // $pas_qry = "INSERT INTO `login_data` (`user_id`, `user_data_id`, `user_email`, `user_pass`, `user_type`) VALUES (NULL, '', '$user_email', '$user_c_pass', '$user_type')";

        $path = "admin/dataimages/".$pan_no;
        // echo $query;

        $query_data = "SELECT * FROM `user_data` WHERE `pan_no` = '$pan_no'";
        $result=mysqli_query($con,$query_data);

        $num_row=mysqli_num_rows($result);

        if($num_row > 0){
            echo '<script>alert("User Already Exist!!!")
                    window.location.href="../dashbord.php";
                    </script>';
        }else{
            if(!is_dir($path."/")){
                if(mysqli_query($con,$query)){
                    mkdir($path."/");            
                    // mysqli_query($con,$pas_qry);
                    move_uploaded_file($pan_front_tmp, $path."/$pan_front");
                    move_uploaded_file($pan_back_tmp, $path."/$pan_back");
                    move_uploaded_file($add_front_tmp, $path."/$add_front");
                    move_uploaded_file($add_back_tmp, $path."/$add_back");
        
                    echo '<script>alert("Registation Successfull")
                    window.location.href="../dashbord.php";
                    </script>';
                }else{
                    echo '<script>alert("Registation Faileld")
                    window.location.href="../dashbord.php";
                    </script>';
                }
            }else{
                if(mysqli_query($con,$query)){
                    // mysqli_query($con,$pas_qry);
                    move_uploaded_file($pan_front_tmp, $path."/$pan_front");
                    move_uploaded_file($pan_back_tmp, $path."/$pan_back");
                    move_uploaded_file($add_front_tmp, $path."/$add_front");
                    move_uploaded_file($add_back_tmp, $path."/$add_back");
        
                    echo '<script>alert("Registation Successfull")
                    window.location.href="../dashbord.php";
                    </script>';
                }else{
                    echo '<script>alert("Registation Faileld")
                    window.location.href="../dashbord.php";
                    </script>';
                }
            }
        }                
    }
