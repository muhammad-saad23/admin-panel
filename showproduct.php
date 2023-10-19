<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('../config.php');

// display products

$select="SELECT *FROM `product` as p inner join `category` as c on p.category = c.id order by category desc";

$run_query=mysqli_query($connection,$select);

if (mysqli_num_rows($run_query)>0) {
        

    
?>




    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

while ($data=mysqli_fetch_assoc($run_query)) {

                    ?>
                    <tr>
                    <th scope="row"><?php echo $data['id']?></th>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['des']?></td>
                    <td ><img src="<?php echo 'image/'. $data['image']?>" width='100px' height='100px' alt=""></td>
                    <td ><?php echo $data['status']?></td>
                    <td ><a class='btn btn-success' href="updateData.php?id=<?php echo $data['id']?>">update</a></td>
                    <td ><a class='btn btn-danger' href="delete.php?id=<?php echo $data['id']?>">delete</a></td>
                    
                </tr>
                
               <?php
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










<?php
include('admin/includes/footer.php');


?>