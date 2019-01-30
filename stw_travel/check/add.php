<?php 
#print_r($_FILES);

if(isset($_FILES['imgfile'])){
$target_dir = "../img/gal/";
$target_file = $target_dir . basename($_FILES["imgfile"]["name"]);
$uploadOk = 1;
$no=1;
$upload="";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
	if ($_FILES["imgfile"]['size']!='0'||null){
    $check = getimagesize($_FILES["imgfile"]["tmp_name"]);
    if($check !== false) {

        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $upload = "File is not an image.";
        $uploadOk = 0;
    }
}
}
// Check if file already exists
if (file_exists($target_file)) {
	$no=0;
    $upload .= "<br>Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imgfile"]["size"] > 50000000) {
    $upload .= "<br>Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" &&$imageFileType != "JPG" ) {
    $upload .= "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $upload .= "<br> your file was not uploaded.";
    	if($no==0){
    		$upload .=" re - name and try agein";
    	}
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file)) {
        $upload =   "img/gal/".basename( $_FILES["imgfile"]["name"]);
		//$_SESSION['imeurl'] = $uploa;
		//$upload=1;
    } else {
		$uploadOk == 0;
        $upload .= "Sorry, there was an error uploading your file.";
    }
}
echo "$upload";

}

 ?>