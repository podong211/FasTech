<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between border-bottom"></div><br><br>
        <div class="row mb-3">
            <div class="col-xl-4 ol-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Users</div>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "hnd_furniture";

                                //Create Connection
                                $connection = new mysqli($servername, $username, $password, $database);

                                //Check Connection
                                if($connection->connect_error){
                                    die("Connection Failed: " . $connection->connection_error);
                                }

                                $query = "SELECT id FROM customers ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                if($id_total = mysqli_num_rows($query_run)){
                                    echo '<h5 class = "mb-0">'.$id_total.'</h5>';
                                }
                                else{
                                    echo '<h5 class= "mb-o">No Data</h5>';
                                }
                                ;
                            ?>             
                            </div>
                            <div class="col-auto">
                            <span class="mdi mdi-account-multiple mdi-48px"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ol-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Orders</div>
                            <!--NEED DATABASE COUNT ALL USERS-->
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                            <span class="mdi mdi-package-variant-closed mdi-48px"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ol-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Revenue</div>
                            <!--NEED DATABASE COUNT ALL USERS-->
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                            <span class="mdi mdi-wallet mdi-48px"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
    <!-- page-body-wrapper ends-->
  </div>
  <!-- container-scroller -->