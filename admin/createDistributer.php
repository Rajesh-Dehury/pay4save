<!-- Registation form -->
<div class="container-fluid" id="registerBox">
    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col-sm-10 p-2 p-lg-5 mt-1 bg-white">
            <form action="includes/function.php" method="post" id="regForm" enctype="multipart/form-data">
                <div class="row px-3 justify-content-center">
                    <!-- user type -->
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <p class="fs-6 text-indigo-600">User Type</p>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-users-cog"></i></span>
                            <select class="form-select form-select-lg rounded-none text-indigo-400 border-indigo-400 shadow-none" aria-label="Default select example" name="user_type" required>
                                <option value="">Choose Your Type</option>
                                <option value="dist">Distributer</option>
                                <option value="reta">Retailer</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <p class="fs-6 text-indigo-600">Personal Details</p>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-briefcase"></i></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Business name / Indivisual" name="user_name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Name as PAN" name="name_as_pan" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-mobile p-1"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Mobile no" name="user_mobile" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-at"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="E-Mail" name="user_email" required>
                        </div>
                        <p class="text-indigo-400 mb-3">Password</p>
                        <div class="input-group mb-3">
                            <div class="col-sm-6">
                                <input type="password" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Password" name="user_pass" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Confirm Password" name="user_c_pass" required>
                            </div>
                        </div>
                    </div>
                    <!-- address -->
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <p class="fs-6 text-indigo-600">Address</p>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-map"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="State" name="user_state" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-map"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="District" name="user_dist" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-map"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Pin Code / ZIP Code" name="user_pin" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-sm-12 w-100">
                                <p class="text-indigo-400">Locality</p>
                            </div>
                            <div class="col-sm-12 w-100">
                                <textarea name="user_locality" rows="6" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- upload doc -->
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <p class="fs-6 text-indigo-600">Documents</p>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-file-upload"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Enter PAN" name="pan_no" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-sm-6">
                                <p class="text-indigo-400">Upload Front</p>
                                <small><input type="file" class="form-control shadow-none border-indigo-400 text-indigo-400 rounded-none" name="pan_front" required></small>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-indigo-400">Upload Back</p>
                                <small><input type="file" class="form-control shadow-none border-indigo-400 text-indigo-400 rounded-none" name="pan_back" required></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-file-upload"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Enter GST" name="gst_no" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-file-upload"></i></span>
                            <select class="form-select rounded-none text-indigo-400 border-indigo-400 shadow-none" aria-label="Default select example" name="add_p_type" required>
                                <option value="">Choose Address Proof Type</option>
                                <option value="Voter ID">Voter ID Card</option>
                                <option value="Driving Licence">Driving Licence</option>
                                <option value="Adhar Card">Adhar Card</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-none bg-indigo-400 text-white border-none" id=""><i class="fas fa-file-upload"></i></span>
                            <input type="text" class="form-control rounded-none border-indigo-400 placeholder-indigo-400 shadow-none" placeholder="Enter Address Proof No" name="add_p_no" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-sm-6">
                                <p class="text-indigo-400">Upload Front</p>
                                <small><input type="file" class="form-control shadow-none border-indigo-400 text-indigo-400 rounded-none" name="add_front" required></small>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-indigo-400">Upload Back</p>
                                <small><input type="file" class="form-control shadow-none border-indigo-400 text-indigo-400 rounded-none" name="add_back" required></small>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 row p-0">
                        <div class="col-sm-6 d-grid">
                            <button type="reset" class="btn rounded-none border-indigo-400 hover:bg-red-400 hover:text-white text-indigo-400">Reset</button>
                        </div>
                        <div class="col-sm-6 d-grid">
                            <button type="submit" class="btn rounded-none border-indigo-400 hover:bg-green-400 hover:text-white text-indigo-400" name="regU">Submit </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>