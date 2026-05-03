<?php 
include 'conn.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["create"])){

    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $email = $_POST['email_username'];

    $location_e = "";
    
    if($_FILES['file_upload']['name'] !== ''){
      
        $filename = $_FILES['file_upload']['name'];
        $file_size = $_FILES['file_upload']['size'];
        $file_tmp = $_FILES['file_upload']['tmp_name'];
        $file_type = $_FILES['file_upload']['type'];
        $extesion = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $valid_extension = ['png','jpeg','jpg','gif','avif','pdf'];

        if(in_array($extesion,$valid_extension)){
            $new_name = rand(). "." . $extesion; 
            $location_e = "images/".$new_name;
           $move_file = move_uploaded_file($file_tmp, $location_e);
        }
    }
    $sql  = "INSERT INTO curd_user(firstname, lastname, email, image) 
             VALUES('$f_name', '$l_name', '$email', '$location_e')";
    $data = mysqli_query($conn, $sql);

    if($data){
        echo "Data Inserted";
    } else {
        echo "Something Went Wrong";
    }
}

// update query_builder
if(isset($_POST['update'])){
    $id         = intval($_POST['id']);
    $firstname  = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lastname   = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email      = mysqli_real_escape_string($conn, $_POST['email_username']);


    $oldData = mysqli_query($conn, "SELECT image FROM curd_user WHERE id = $id");
    $oldRow  = mysqli_fetch_assoc($oldData);
    $oldimage = $oldRow['image'];

    $newimage = $oldimage;
    if(!empty($_FILES['file_upload']['name'])){
        $filename = $_FILES['file_upload']['name'];
        $tmp_name = $_FILES['file_upload']['tmp_name'];

        $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $valid_Ext = ['png','jpg','jpeg','gif','avif'];

        if(!empty($oldimage) && file_exists("images/".$oldimage)){
            unlink("images/".$oldimage);
        }
        
    }
    $sql = "UPDATE curd_user SET firstname = '$firstname', lastname = '$lastname', email = '$email', image = '$newimage' WHERE id = '$id'";
    $run = mysqli_query($conn,$sql);
    if($run){
        header("location:index.php");
    } else {
        echo "Update Failed";
    }
    
} 

// delete 


if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    /* image fetch */
    $imgQuery = mysqli_query($conn, "SELECT image FROM curd_user WHERE id = $id");
    $row = mysqli_fetch_assoc($imgQuery);

    $oldimage = $row['image'];

    /* delete image */
    if (!empty($oldimage) && file_exists("images/" . $oldimage)) {
        unlink("images/" . $oldimage);
    }

    /* delete record */
    $del = mysqli_query($conn, "DELETE FROM curd_user WHERE id = $id");

    if ($del) {
        header("Location:index.php");
        exit;
    } else {
        echo "Delete Failed";
    }
}
?>