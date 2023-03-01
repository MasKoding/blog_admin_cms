<?php 

    require_once 'connect.php';
    require_once 'header.php';
?>
<!-- main html -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-11">
                <a href="form_add.php" class="btn btn-success mb-3 float-start"> 
                    Add </a>
                    <a href="delete_all.php" class="btn btn-danger mb-3 float-end"> 
                    Delete All </a>
                <br>
                <table border="1" class="table table-light table-hover">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Created Time</th>
                        <th scope="col">Image</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                    <?php 
                        $querySelect = "SELECT * FROM book";
                        $result = $connect->query($querySelect);
                        if($result->num_rows>0):
                            while($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?=$row['id'] ?></td>
                        <td><?=$row['title'] ?></td>
                        <td><?=$row['author'] ?></td>
                        <td><?=$row['description'] ?></td>
                        <td><?=$row['created_time'] ?></td>
                        
                        <td><img src="<?=$row['filename'] ?>" 
                        width="150px" height="150px"/></td>
                        <td>
                                <a href="form_edit.php?id=<?=$row['id'] ?>" 
                                class="btn btn-primary text-light">Edit</a>
                        </td>
                        <td>
                                <a href="delete.php?id=<?=$row['id'] ?>"
                                 class="btn btn-danger text-light">Delete</a>
                        </td>
                    </tr>
                    <?php 
                                endwhile;
                            endif;
                    ?>
                </table>
            </div>
        </div>
    </div>

<?php 
    require_once 'footer.php';
?>

