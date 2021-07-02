<!-- admin functions -->
<?php
    include_once 'dbcon.php';  
    
    if(isset($_POST['cancelR'])){
        $_id =$_POST['submit_id'];
        $qry = "UPDATE `user_data` SET `active_status` = 'not approved' WHERE `user_data`.`user_id` = '$_id'";

        if(mysqli_query($con,$qry)){
            echo "<script>
            alert(User Approval Canceled');
            </script>";
        }
    }

   
    if(isset($_POST['approveR'])){
        $_id =$_POST['submit_id'];
        $qry = "UPDATE `user_data` SET `active_status` = 'approved' WHERE `user_data`.`user_id` = '$_id'";

        if(mysqli_query($con,$qry)){
            echo "<script>
            alert('User Approved');
            </script>";
        }        
    }

   
?>