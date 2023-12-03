<?php 
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
} 

?>


<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add users</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="LastName" required>
                 </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
            </div>
           
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="update" >
            <hr>
                         
        </form>

            </div>
<?php 
include('includes/footer.php');
?>