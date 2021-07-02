<?php
    include 'includes/function.php';
    $id = $_GET['user_id'];

    $qry = "SELECT * FROM `user_data` WHERE `user_id` = '$id'";
    $res = mysqli_query($con,$qry);
    $row = mysqli_fetch_array($res);

    // echo "<pre>";
    // echo $row[3];
    
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="alert rounded-0 <?php echo $row['active_status']=='approved'?'alert-success':'alert-danger'; ?>" role="alert">
                <p class="text-center uppercase"><?php echo $row['active_status']=='approved'?'Approved':'Not Approved'; ?></p>
            </div>
        </div>
        <div class="col-sm-8 my-4">
            <form class="row g-3" method="POST">
                <div class="col-md-4">
                    <label class="form-label">User Type</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_type'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">User Name</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_name'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Name As PAN</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['name_as_pan'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mobile No</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_mobile'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">E-mail</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_email'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">State</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_state'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Dist</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_state'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">PIN Code / Zip</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_pin'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Locality</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['user_locality'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-12">
                    <label class="form-label">PAN No</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['pan_no'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">PAN Front</label>
                    <img src="../dataimages/<?php echo $row['pan_no'] ?>/<?php echo $row['pan_front'] ?>"
                        class="data-img mx-auto">
                </div>
                <div class="col-md-6">
                    <label class="form-label">PAN Back</label>
                    <img src="../dataimages/<?php echo $row['pan_no'] ?>/<?php echo $row['pan_back'] ?>"
                        class="data-img mx-auto">
                </div>
                <div class="col-md-4">
                    <label class="form-label">GST No</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['gst_no'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">POA Type</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['add_p_type'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">POA No</label>
                    <input class="form-control" type="text" placeholder="<?php echo $row['add_p_no'] ?>"
                        aria-label="Disabled input example" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">POA Front</label>
                    <img src="../dataimages/<?php echo $row['pan_no'] ?>/<?php echo $row['add_front'] ?>"
                        class="data-img mx-auto">
                </div>
                <div class="col-md-6">
                    <label class="form-label">POA Back</label>
                    <img src="../dataimages/<?php echo $row['pan_no'] ?>/<?php echo $row['add_back'] ?>"
                        class="data-img mx-auto">
                </div>
                <!-- user id -->
                <input type="hidden" name="submit_id" value="<?php echo $row['user_id'] ?>">
                <div class="col-12 row justify-content-end g-3">
                    <button type="submit" name="cancelR"  onclick="return confirm('Are you sure you want to Disapprove?');" class="btn btn-danger w-25 mr-3">Not Approve</button>
                    <button type="submit" name="approveR"  onclick="return confirm('Are you sure you want to Approve?');" class="btn btn-success w-25">Approve</button>
                </div>
            </form>
        </div>
    </div>
</div>