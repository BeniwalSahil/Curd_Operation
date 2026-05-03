<?php 
include 'header.php'; 
?>
<div class="container">
    <div class="">
        <h3>List of User</h3>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php
         $sql    = "SELECT * FROM curd_user";
        $data   = mysqli_query($conn, $sql);
        $i =1;
         while($user = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['image'] ?></td>
            <td><a class="btn btn-success" href="edit.php?id=<?= $user['id'] ?>">
                    Edit
                </a>
                <a class="btn btn-danger" name="delete" href="controller.php?id=<?= $user['id'] ?>">
                    Delete
                </a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</div>
<?php
include 'footer.php';
?>