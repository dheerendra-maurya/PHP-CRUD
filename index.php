<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <br><br>
    <div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add New Client
    </button>
    </div>
    <br>
    <div class="container">
        <div class="row">
        <table class="table">
            <thead>
                <tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Action</th></tr>
            </thead>
            <tbody>
                <tr><td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>&nbsp;<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button></td></tr>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Add to New Client Form Start-->
    
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Your Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <table class="table">
                    <tr><input type="text" class="form-control" placeholder="Enter Your First Name"></tr><br>
                    <tr><input type="text" class="form-control" placeholder="Enter Your Last Name"></tr><br>
                    <tr><input type="email" class="form-control" placeholder="Enter Your Email"></tr><br>
                    <tr><input type="password" class="form-control" placeholder="Enter Your password"></tr><br>
                    <tr><input type="tel" class="form-control" placeholder="Enter Your Phone Number"></tr><br>
                    <tr><input type="text" class="form-control" placeholder="Enter Your Address"></tr><br>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    <!-- Add to New Client Form End-->



    <!-- Edit Details Form Start-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editFormLebel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFormLebel">Edit Your Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <table class="table">
                    <tr><input type="text" class="form-control" placeholder="Enter Your First Name"></tr><br>
                    <tr><input type="text" class="form-control" placeholder="Enter Your Last Name"></tr><br>
                    <tr><input type="email" class="form-control" placeholder="Enter Your Email"></tr><br>
                    <!-- <tr><input type="password" class="form-control" placeholder="Enter Your password"></tr><br> -->
                    <tr><input type="tel" class="form-control" placeholder="Enter Your Phone Number"></tr><br>
                    <tr><input type="text" class="form-control" placeholder="Enter Your Address"></tr><br>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        
    
    <!--Edit Details Form End-->

    <!-- Delete Data Form start  -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteData" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="deleteData">Are You Sure To Delete This Data ?</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
        </div>
    <!-- Delete Data Form End  -->

</body>
</html>