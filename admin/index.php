<?php

include "includes/header.php";
?>

<div class="container-fluid bg-indigo-900" id="loginBox">
    <div class="row justify-content-center p-3 vh-100 align-items-center">
        <div class="col-sm-4 bg-white m-2 p-3 rounded shadow">
            <div class="row px-3 justify-content-center">
                <p class="text-center mb-5 text-4xl font-bold">Log in</p>
                <form action="includes/loginFunction.php" method="post" id="loginForm">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-indigo-900 text-white border-none" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="email" class="form-control form-control-lg border-indigo-900 placeholder-indigo-900 shadow-none" placeholder="Username" name="adname">
                    </div>
                    <div class="input-group mb-5">
                        <span class="input-group-text bg-indigo-900 text-white border-none" id="basic-addon1"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control form-control-lg border-indigo-900 placeholder-indigo-900 shadow-none" placeholder="Password" name="adpass" required>
                    </div>
                    <div class="input-group mb-5 d-grid">
                        <button type="submit" class="btn btn-lg bg-indigo-700 hover:bg-indigo-900 hover:text-gray-50 text-gray-50" name="ad_login">Log in</button>
                    </div>
                    <a href="../">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>