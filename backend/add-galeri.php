<?php
    require_once ("getConnection.php");

    $conn=getConnection();


        if(isset($_POST['submit'])){
            $target_dir="img/";
            $target_file=$target_dir.basename($_FILES['image']['name']);
            $imageExt=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $extensions_arr=array("jpg","jpeg","png","gif");

            if(!file_exists($_FILES['image']['tmp_name']) ){
                echo "Please select an image file to upload.";
            }elseif (!in_array($imageExt,$extensions_arr)) {
                echo "Invalid file extension.";
            }elseif ($_FILES['image']['size'] > 5000000) {
                echo "File size must be less than 5MB.";
            }elseif (file_exists($target_file)) {
                echo "File already exists.";
            }else {
                if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) {
                    $sql="INSERT INTO galeri (gambar) VALUES ('$target_file')";
                    $stmt=$conn->prepare($sql);
                    if ($stmt->execute()) {
                        echo "Image uploaded successfully.";
                    }
                }else {
                    echo "Failed to upload image.";
                }
            }

        }
        // if(isset($_POST['submit'])){
        //     $image_file=$_FILES['image']['name'];
        //     $tmp_dir=$_FILES['image']['tmp_name'];
        //     $image_size=$_FILES['image']['size'];
    
        //     if (empty($image_file)) {
        //         echo "Pilih gambar terlebih dahulu";
        //     }else{
        //         $upload_dir='../img/';
        //     }
            
        //     $imgExt=strtolower(pathinfo($image_file,PATHINFO_EXTENSION));
    
        //     $valid_extensions=array('jpeg','jpg','png','gif');
    
        //     $image_upload=rand(1000,1000000).".".$imgExt;
    
        //     if (in_array($imgExt, $valid_extensions)) {
        //         if ($image_size<5000000) {
        //             move_uploaded_file($tmp_dir, $upload_dir.$image_upload);
        //         }else{
        //             echo "Ukuran gambar terlalu besar";
        //         }
        //     }else{
        //         echo "Format gambar tidak didukung";
        //     }

        //     $stmt=$conn->prepare("INSERT INTO galeri (gambar) VALUES (:gambar)");
        //     $stmt->bindParam(':gambar',$image_upload);
        //     $stmt->execute();
        //     header("location: ../frontend/gallery.php");


        //     // $sql="INSERT INTO galeri (gambar) VALUES (:gambar)";
        //     // $stmt=$conn->prepare($sql);
            
        //     // $stmt->bindParam(':gambar',$image);
    
        //     // $stmt->execute();
            
        // }

    $conn=null;
?>