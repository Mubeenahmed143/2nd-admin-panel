<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');
?>


    <div class="container">

    <?php 
    
    $fetch_pro = "SELECT * from `addproduct`";
    $fetch_product = mysqli_query($connection, $fetch_pro);
    
    if($fetch_product){
    if(mysqli_num_rows($fetch_product) > 0){

    ?>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>VIEW PRODUCTS </h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Products Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                while($row = mysqli_fetch_assoc($fetch_product)){
                ?>

                    <tr>
                    <td><?php echo $row['pid']?> </td>
                    <td><?php echo $row['pname']?> </td>
                    <td><?php echo $row['pdescription']?> </td>
                    <td><?php echo $row['pcategory']?> </td>                  
                    <td><?php echo $row['price']?> </td>
                    <td><img src=" <?php echo 'img/'.$row['image'] ?> "alt="" height="50px" width="50px" ></td>  
                    <td ><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa-solid fa-file-pen" style="color: #eb0000;"></i></a></td>
                    <td ><a href="delete.php?id=<?php echo $row['id'] ?> " class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash" style="color: #1ae40c;"></i></a></td>              
                </tr>
                <?php 
                } } }
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










<?php
include('includes/footer.php');


?>