<?php
session_start();

if (isset($_SESSION['u_id'])) {
} else {
?>
    <Script>
        alert("You Must Login First!!!!!!");
        window.open('../index.php', '_self');
    </Script>
<?php
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <title>Pay 4 Save</title>
</head>

<body>
    <header class="shadow-md">
        <nav class="navbar navbar-light bg-yellow-300 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <!-- <img src="https://logodix.com/logo/787253.png" alt="" width="30" height="24"
                        class="d-inline-block align-text-top"> -->
                    Pay4Save
                </a>
                <a href="logout.php" class="text-decoration-none hover:text-white">
                    <span>Log out</span><i class="bi bi-box-arrow-left ms-3" style="font-size: 25px;"></i>
                </a>
            </div>
        </nav>
    </header>


    <!-- <div class="container pt-5 mt-3 ">
        <div class="row  justify-content-center ">
            <div class="col-sm-5 shadow-md p-0 m-4 d-flex flex-column bg-yellow-100">


            </div>
            <div class="col-sm-5 shadow-md p-0 m-4 d-flex flex-column bg-yellow-100">

            </div>
        </div>
    </div> -->

    <!-- <div class="container mt-3 pt-3 px-0">
        <div class="row justify-content-center ">
            <div class="col-sm-12 p-0 m-4 bg-yellow-100">
                <div class="col-sm-12 p-3">
                    <div class="row justify-content-center g-3">
                        <div class="col-sm-4 p-0 text-center">
                            <div class="bg-yellow-100 p-0 shadow-md">
                                <div class="col-sm-12">
                                    <p class="text-center p-3 bg-yellow-300">Wallet Balance</p>
                                </div>
                                <div class="col-sm-12 p-3 bg-yellow-100">
                                    <div class="row justify-content-center">
                                        <div class="col-5 text-center">
                                            <p class="text-5xl"><i class="fas fa-rupee-sign text-4xl me-2"></i> 5000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="p-0 bg-yellow-100">
  shadow-md                               <div class="col-sm-12">
                                    <p class="text-center p-3 bg-yellow-300">Retailer Details</p>
                                </div>
                                <div class="col-sm-12 p-3 bg-yellow-100">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>Name :</p>
                                        </div>
                                        <div class="col-8">
                                            <p>Rajesh</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p>Email :</p>
                                        </div>
                                        <div class="col-8">
                                            <p>Rajesh@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p>Mobile No :</p>
                                        </div>
                                        <div class="col-8">
                                            <p>9090909090</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p>Id :</p>
                                        </div>
                                        <div class="col-8">
                                            <p>b33hbbjkn550</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-5 bg-yellow-100">
        <div class="row justify-content-center g-3 mt-3">
            <div class="col-sm-4">
                <div class="col-sm-12">
                    <p class="text-center p-3 bg-yellow-300 text-2xl">Wallet Balance</p>
                </div>
                <div class="col-sm-12 p-3 bg-yellow-100">
                    <div class="row justify-content-center">
                        <div class="col-5 text-center">
                            <p class="text-5xl"><i class="fas fa-rupee-sign text-4xl me-2"></i> 5000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <p class="text-center p-3 bg-yellow-300 text-2xl">Retailer Details</p>
                </div>
                <div class="col-sm-12 p-3 bg-yellow-100">
                    <div class="row">
                        <div class="col-4">
                            <p>Name :</p>
                        </div>
                        <div class="col-8">
                            <p>Rajesh</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Email :</p>
                        </div>
                        <div class="col-8">
                            <p>Rajesh@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Mobile No :</p>
                        </div>
                        <div class="col-8">
                            <p>9090909090</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Id :</p>
                        </div>
                        <div class="col-8">
                            <p>b33hbbjkn550</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center ">
            <div class="col-sm-12 p-0 m-4 d-flex flex-column">
                <div class="col-sm-12 p-3">
                    <p class="text-center p-3 bg-yellow-300 text-2xl">Services</p>
                </div>
                <div class="col-sm-12 p-3 ">
                    <div class="row justify-content-center g-3">
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-wallet text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Add Money To Wallet</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-phone text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Mobile Recharge</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-badge-4k text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">DTH Recharge</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-wifi text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Brodband Recharge</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center ">
            <div class="col-sm-12 p-0 m-4 d-flex flex-column">
                <div class="col-sm-12 p-3">
                    <p class="text-center p-3 bg-yellow-300 text-2xl">Reports</p>
                </div>
                <div class="col-sm-12 p-3">
                    <div class="row justify-content-center g-3">
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-plus-square text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Add Money Report</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-arrow-bar-left text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Retailer Transaction
                                    Report</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-phone text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Recharge Report</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="p-2 bg-yellow-100 p-4 shadow-md">
                                <i class="bi bi-wallet2 text-8xl text-yellow-400"></i>
                                <p class="text-xl my-3">Push Money Report</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>