<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between border-bottom"></div><br><br>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">List of Products</h3>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Product Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product price</label>
                                <input type="text" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                            </div>
                        </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >New Product</button>
                        <div class="table-responsive">
                            <table class="table">
                                <thread>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product name</th>
                                        <th>Product Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thread>
                                <tbody>
                                    
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class='btn btn-primary btn-sum' href='editProduct.php'>Edit</a>
                                            <a class='btn btn-danger btn-sum' href='deleteProduct.php'>Delete</a>
                                        </td>
                                    </tr>
            
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