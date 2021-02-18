<?php

echo "allow bwangggg"."<br>";
$link = new mysqli("172.19.0.3","root","aaa","Trucorp");
if(!$link){
echo "belom bisa connect bwang... ada error"."<br>" . PHP_EOL;
exit;
}
echo "ini baru bisa bwang mwantap"."<br>" . PHP_EOL;
echo "Info: " . mysqli_get_host_info($link) ."<br>" . PHP_EOL;
int count = 0 ;
$sql = "SELECT * FROM Trucorp.users";
$result = $link->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
count++;
}
echo "Hasil: ".count;
}
else {
echo "gak ada data bwang";
}
$link->close();

?>
