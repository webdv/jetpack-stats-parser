<?php 
//getting content via jetpack API

$csvurl="http://stats.wordpress.com/csv.php?api_key=<API_KEY>&blog_uri=http://www.example.com&table=views&days=1";
$myArr = array();
$filename = $csvurl;

if (($handle = fopen($filename, "r")) !== FALSE) {
    $key = 0;    // Set the array key.
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $count = count($data);  //get the total keys in row
        //insert data to array
        for ($i=0; $i < $count; $i++) {
            $myArr[$key][$i] = $data[$i];
        }
        $key++;
    }
    fclose($handle);    
}
$todaycount=$myArr[1][1];
echo $todaycount;


?>