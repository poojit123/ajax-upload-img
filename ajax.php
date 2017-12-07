<?php 

$ab=$_FILES['img1']['name'];
$tmp=$_FILES["img1"]["tmp_name"];
$en=md5(date('Y-m-d h:s:i'));
$ext = pathinfo($ab, PATHINFO_EXTENSION);
$filename=$en.'.'.$ext;
move_uploaded_file($tmp,"upload/".$filename);
?>
<img src="upload/<?php echo $filename; ?>">
