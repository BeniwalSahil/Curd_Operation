<?php 
include 'header.php';
?>
<div class="container">
    <form action="controller.php" method="POST" enctype="multipart/form-data">
        <div class="">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control">
        </div>
        <div class="">
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control">
        </div>
        <div class="">
            <label>Email</label>
            <input type="email" name="email_username" placeholder="Enter User Email" class="form-control">
        </div>
        <div class="">
            <label>Image</label>
            <input type="file" name="file_upload" class="form-control">
        </div>
        <div class="mt-10">
            <button type="submit" name="create">Submit</button>
        </div>
    </form>
</div>
<?php 
include 'footer.php';
?>