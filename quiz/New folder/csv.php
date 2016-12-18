<html>
<body>
<div id="wrapper">

<?php

// To Reac CSV File
$csvfile = 'sample_text.csv';
$file_handle = fopen($csvfile, 'r');
while(!feof($file_handle))
{
 echo fgetcsv($file_handle, 1024);
}
fclose($file_handle);


// To Write CSV File
$list = array
(
"Aman,18,20000",
"Rohit,20,24000"
);
$file = fopen("sample_text.csv","w");
foreach ($list as $line)
{
 fputcsv($file,explode(',',$line));
}
fclose($file);

?>

</div>
</body>
</html>