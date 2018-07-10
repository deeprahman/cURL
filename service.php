<?php

if(!file_exists("count.txt")){#if the file is not exist, create the file.
    $fh = fopen("count.txt", "w");
    fwrite($fh, "1");
    fclose($fh);
}

// Run the service until the counter reaches to 5

$fh = fopen("count.txt", "r"); # open a file handle
$counter = (int) fgets($fh); #Store the content in the counter variable as integer
if($counter > 5){# Counter variable is grater than 5, terminate the service
    exit("Service limit exceeded");
}
(string) $counter++;

fwrite($fh, $counter);
fclose($fh);

/***********************************************************************************************/
if($_GET['greeting'] === "greet"){
    $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $output = "Hello, ".$name;
}else{
    $output = "Something went wrong!";
}

header('Content-Type:text/plain');
echo $output;




