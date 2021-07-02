<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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

    <!-- body section -->
    <section class="container pt-5 mt-3">
        <div class="row justify-content-center">
            <!-- <div class="container"> -->
            <div class="row justify-content-center">
                <div class="col-sm-4 m-1 p-0">
                    <div class="col-sm-12">
                        <p class="text-center p-3 bg-yellow-300">Wallet Balance</p>
                    </div>
                    <div class="col-sm-12 p-3 bg-yellow-100 shadow-md">
                        <div class="row justify-content-center">
                            <div class="col-5 text-center">
                                <p class="text-5xl"><i class="fas fa-rupee-sign text-4xl me-2"></i> 5000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 m-1 p-0">
                    <div class="col-sm-12">
                        <p class="text-center p-3 bg-yellow-300">Retailer Details</p>
                    </div>
                    <div class="col-sm-12 p-3 bg-yellow-100 shadow-md">
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
            <!-- </div> -->
        </div>
    </section>
    <section class="container ">
        <div class="row justify-content-center">
            <!-- <div class="container"> -->
            <div class="row justify-content-center">
                <div class="col-sm-4 m-1 p-0">
                    <div class="col-sm-12">
                        <p class="text-center p-3 bg-yellow-300">Report</p>
                    </div>
                    <div class="col-sm-12 p-3 bg-yellow-100 shadow-md">
                        <ul>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Add Money Report</a>
                            </li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Distributer Transaction
                                    Report</a>
                            </li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Recharge Report</a></li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Push Money Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 m-1 p-0">
                    <div class="col-sm-12">
                        <p class="text-center p-3 bg-yellow-300">Services</p>
                    </div>
                    <div class="col-sm-12 p-3 bg-yellow-100 shadow-md">
                        <ul>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Add Money To Wallet</a>
                            </li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Push Money To Retailer</a>
                            </li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Recharge Services</a></li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Add New Retailer</a></li>
                            <li><a href=""><i class="bi bi-arrow-right-circle me-3"></i> Manage Retailer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>