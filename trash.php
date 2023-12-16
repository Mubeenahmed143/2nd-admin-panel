<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');

?>


    <div class="container">

    <?php 
    
    $fetch = "SELECT * from `user` where `status` = '0' ";
    $fetch_data = mysqli_query($connection, $fetch);
    if ($fetch_data) {
        if (mysqli_num_rows($fetch_data) > 0) {

    ?>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Trash users</h2>
                <hr>
            <table class="table table-bordered  table-warning">
                <div class="container">
                <thead class="bg-warning  text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">FastName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                </div>
                <tbody>

                <?php 
                while ($row = mysqli_fetch_assoc($fetch_data)){
                ?>

                    <tr>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td ><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a></td>
                    <td ><a href="delete.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">Delete</a></td>
                    
                </tr>
                <?php 
                 }
                }
                }
                ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>

            </div>

        </div>

    </div>


</body>

</html>