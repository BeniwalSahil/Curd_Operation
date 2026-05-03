<?php 
include 'header.php';
if(!isset($_GET['id'])){
    header("Location:index.php");
    exit;
}
$id = intval($_GET['id']);
$sql = "SELECT * FROM curd_user WHERE id = $id";
$data = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($data);
?>
<div class="container">
    <form action="controller.php" method="POST" enctype="multipart/form-data">
        <div class="">
            <input type="hidden" name="id" value="<?= $result['id'] ?>" />
            <label>First Name</label>
            <input type="text" name="first_name" value=" <?= $result['firstname']?>" placeholder="Enter First Name"
                class="form-control">
        </div>
        <div class="">
            <label>Last Name</label>
            <input type="text" name="last_name" value=" <?= $result['lastname']?>" placeholder="Enter Last Name"
                class="form-control">
        </div>
        <div class="">
            <label>Email</label>
            <input type="email" name="email_username" value=" <?= $result['email']?>" placeholder="Enter User Email"
                class="form-control">
        </div>
        <div class="">
            <label>Image</label>
            <img src="images/<?= $result['image']?>" alt="image" />
            <input type="file" name="file_upload" class="form-control">
        </div>
        <div class="mt-10">
            <button type="submit" name="update">Submit</button>
        </div>
    </form>
</div>
<?php 
include 'footer.php';
?>