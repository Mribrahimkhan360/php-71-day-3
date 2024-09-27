<?php
echo "<pre>";
$arr = array("name","address","age");
// print_r($arr);


// foreach index array

foreach ($arr as $value) {
	echo $value.'<br>';

}


echo('<br>');
foreach ($arr as $key => $value) {
	echo $value.'<br>';
}
echo "<br>";
foreach ($arr as $key => $value) {
	echo $value[1].'<br>';
}
echo "<br>";
foreach ($arr as $key => $value) {
	echo $key.'<br>';
}

// foreach PHP Associative Arrays
echo "=======================foreach PHP Associative Arrays======================".'<br>';
$arr =array("name"=>"Ibrshim","city"=>"Dhaka");
foreach($arr as $key=>$val){
	echo $key.'<br>';
}

echo '<br>'.$arr['name'];

echo "=========================== php arrays multidimensional =====================";

$arr=array("Name"=>"Ibrahim","subject"=>array("Bangla","Hindi","Arabic","Math"),"Physics"=>"First","Physic"=>"Second");
print_r($arr['Name'][0]);

//echo '<br><br>'.count($arr).'<br><br>';

$arr=array("Name"=>"Ibrahim","subject"=>array("Bangla","Hindi","Arabic","Math"),"Physics"=>"First","Physic"=>"Second");
echo ksort($arr);
?>
<?php
$arr = array('Comilla', 'Feni', 'Brahmanbaria', 'Rangamati', 'Noakhali', 'Chandpur', 'Laxmipur', 'Chittagong', 'Coxs Bazar', 'Khagrachari', 'Bandarban');
sort($arr);
echo '<select>';
echo '<option>Select</option>';
foreach ($arr as $value) {
    echo '<option>' . $value . '</option>';
}
echo '</select>';
?>
