
<?php 
$submitted_name = $_FILES["profile_name"];

$file_name = $submitted_name['name'];
$file_temp_name = $submitted_name['tmp_name'];
$file_size = $submitted_name['size'];
$file_type = $submitted_name['type'];

$file_mega_byte_size= floor($file_size/1024);
if($file_mega_byte_size>1024)
{
	echo floor($file_mega_byte_size/1024)." MB";
}else{
	
	echo $file_mega_byte_size." KB";
}
echo "<br/> Name : ".$file_name;
echo "<br/> Temporary Name : ".$file_temp_name."<br/>";
echo "<br/> File Type : ".$file_temp_name."<br/>";
echo "<pre>";
echo var_dump($submitted_name);
echo "</pre>";

echo "<img src='img/$file_name' style='width:400px'>";

move_uploaded_file($file_temp_name,"img/$file_name");
?>