<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Call Service</title>
</head>
<body>
    <h3>The cURL</h3>
    <?php
        $url = "http://sandbox/filehandle/service.php?greeting=greet&name=Deep";
        $crul = curl_init($url); #create a handle and store it to a variable
        //set Curl OPTIONS
        curl_setopt_array($curl,[
                CURLOPT_FAILONERROR => 1,
                CURLOPT_FOLLOWLOCATION => 1,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_TIMEOUT => 5,
                CURLOPT_URL => $curl
                ]
        );
        $result = curl_exce($curl); #Store the returned results
        curl_close($curl);
        print_r($result); #print the result

    ?>
</body>
</html>