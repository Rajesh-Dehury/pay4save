<?php
include_once 'dbcon.php';

if (isset($_POST['ad_login'])) {

    $uname = $_POST['adname'];
    $upass = $_POST['adpass'];

    // echo $uname;
    $query = "SELECT * FROM `admin_login` WHERE `ad_email`='$uname' AND `ad_pass`='$upass';";

    $result = mysqli_query($con, $query);

    $num_row = mysqli_num_rows($result);

    if ($num_row < 1) {
?>
        <Script>
            alert("Username Password missmatch!!!");
            window.open('../index.php', '_self');
        </Script>
<?php
    } else {
        $data = mysqli_fetch_assoc($result);

        $id = $data['ad_id'];

        session_start();
        $_SESSION['ad_id'] = $id;
        $_SESSION['ad_email'] = $data['ad_email'];
        echo "<Script>alert('Log in Success......');
            window.open('../dashboard.php', '_self');        
        </Script>";
        // header('location:../dashboard.php');
    }
}
?>