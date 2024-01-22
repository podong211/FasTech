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

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $pass = md5($connection, $_POST['pass']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between border-bottom"></div><br><br>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">List of Customers</h3>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                            <input type="text" class="form-control" name="username" required placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control" name="pass" required placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                            <input type="email" class="form-control" name="email" required placeholder="Email">
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" name="submit">Add</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >New Customer</button>
                        <div class="table-responsive">
                            <table class="table">
                                <thread>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email Address</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thread>
                                <tbody>
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

                                    //Read all row from db
                                    $sql = "SELECT * FROM customers";
                                    $result = $connection->query($sql);
                                    
                                    if(!$result){
                                        die("Invalid query:" . $connection->error);
                                    }

                                
                                    while($row = $result->fetch_assoc()){
                                        echo"
                                        <tr>
                                        <td>$row[id]</td>
                                        <td>$row[username]</td>
                                        <td>$row[pass]</td>
                                        <td>$row[email]</td>
                                        <td>$row[create_at]</td>
                                        <td>

                                            <a class='btn btn-primary btn-sum' href='editCustomer.php?id=$row[id]'>Edit</a>
                                            <a class='btn btn-danger btn-sum' href='deleteCustomer.php?id=$row[id]'>Delete</a>
                                        </td>
                                    </tr>
                                        ";
                                    }
                                    ?>
                                </tbody>
                            </table>
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