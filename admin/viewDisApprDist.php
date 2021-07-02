

<?php 
    // get the data
    include 'includes/function.php';
    $qry = "SELECT * FROM `user_data` WHERE `active_status` = 'not approved' AND `user_type` = 'dist'";
    $res = mysqli_query($con,$qry);    
?>
<div class="row justify-content-center mx-3">
    <p class="text-4xl mt-4">Disapproved Distributer</p>
    <div class="container bg-indigo-50 mx-3 my-3 p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col" class="d-none d-md-table-cell">Phone</th>
                    <th scope="col">Details</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($res)):;?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $row['name_as_pan'] ?></td>
                    <td class=" d-none d-md-table-cell"><?php echo $row['user_email'] ?></td>
                    <td class="d-none d-md-table-cell"><?php echo $row['user_mobile'] ?></td>
                    <td>
                        <a href="dashboard.php?content_id=viewDistributer&&user_id=<?php echo $row['user_id'] ?>" type="submit" class="btn btn-success btn-sm rounded-0">View</a>
                    </td>
                    <td>
                        <a href="" type="submit" class="btn btn-danger btn-sm rounded-0">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>