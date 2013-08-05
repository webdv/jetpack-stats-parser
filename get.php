<?php 

$my_blog = "http://www.myblog.com";
$my_api_key = "JETPACK_API_KEY";
$csvurl = "http://stats.wordpress.com/csv.php?api_key=$my_api_key&blog_uri=$my_blog&table=views&days=1";
$myArr = array();
$filename = $csvurl;

if (($handle = fopen($filename, "r")) !== FALSE) 
{
    $key = 0;    //setting the array key
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
        $count = count($data);  //getting the total keys in a row
       
        for ($i=0; $i < $count; $i++) 
        {
            $myArr[$key][$i] = $data[$i];  //inserting data into array
        }
        $key++;
    }
    fclose($handle);   //closing the file
}

$todaycount = $myArr[1][1]; //passing the data to $todaycount

echo $todaycount; 

?>