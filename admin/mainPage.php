<?php
    include 'includes/function.php';
    $qry ="SELECT * FROM `user_data` WHERE `user_type` ='dist'";
    $res =mysqli_query($con,$qry);
    $num_row = mysqli_num_rows($res);

    $qry2 ="SELECT * FROM `user_data` WHERE `user_type` ='reta'";
    $res2 =mysqli_query($con,$qry2);
    $num_row2 = mysqli_num_rows($res2);

?>


<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-4">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-6 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Total Revenue</h5>
                    <h3 class="font-bold text-3xl">₹ 3249 </h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-4">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-6 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Total Distributers</h5>
                    <h3 class="font-bold text-3xl"><?php echo $num_row ?></h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div
            class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-4">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-6 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Total Retailer</h5>
                    <h3 class="font-bold text-3xl"><?php echo $num_row2 ?></h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
</div>