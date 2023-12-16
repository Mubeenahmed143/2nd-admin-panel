<?php 
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $fetch_user = "SELECT  * from `user` where `id` = '$id' ";
    $res = mysqli_query($connection,$fetch_user);
    if($res){
        if(mysqli_num_rows($res) > 0){

?>


<div class="container">
    <?php 
    while($row = mysqli_fetch_assoc($res)){

    
    ?>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Update Page</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="hidden" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="id" name="id" required value="<?php echo $row['id'] ?>" >
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" required value=" <?php echo $row['fname'] ?>" >
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="LastName" required value = "<?php echo $row['lname']?>">
                 </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required value="<?php echo $row['email'] ?>">
            </div>
           
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="update" value="update" >
            <hr>
                         
        </form>

            </div>
<?php 
    }
}
    }
}


if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $email = $_POST['email'];

    $update = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',
    `email`='$email' WHERE `id` = '$user_id'";
    $result = mysqli_query($connection,$update);
    if($result){
        echo '<script>
        alert("data updated successfully");
        window.location.href="viewuser.php"
        </script>';
    }
}




include('includes/footer.php');
?>