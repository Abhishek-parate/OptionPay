<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Main form data from POST
    $postData = [
        'name'    => $_POST['name'],
        'email'   => $_POST['email'],
        'mobile'  => $_POST['mobile'],
        'company' => $_POST['company']
    ];

    // Extract UTM parameters from POST (hidden fields)
    $utmParams = [
        'source'      => $_POST['source'] ?? '',
        'media'       => $_POST['media'] ?? '',
        'campaign'    => $_POST['campaign'] ?? '',
        'cn'          => $_POST['cn'] ?? '',
        'ag'          => $_POST['ag'] ?? '',
        'utm_term'    => $_POST['utm_term'] ?? '',
    ];

    // Merge form data and UTM parameters
    $fullData = array_merge($postData, $utmParams);

    // Prepare endpoints
    $endpoints = [
        // [
        //     'url'  => 'https://teleduce.corefactors.in/lead/apiwebhook/4fd9ac93-4b74-4f33-9719-9558d9bea3b2/webformLP/',
        //     'type' => 'form',
        // ],
        [
            'url'  => 'https://script.google.com/macros/s/AKfycbztmTSzaNUz-YSsswoP99-C4HPd59bndR1I4_lBPvmhOULMEGZlYAphcb4cHk12YGvZaw/exec',
            'type' => 'form',
        ],
        [
            'url'  => 'https://c4za7glq.OptionPaymoney.in/a4slqzperan5z/qascvghktrbcqplkmnska/webhook-s2pweb-5xplqizor',
            'type' => 'json',
            'data' => array_merge($fullData, [
                'company'   => $fullData['company'],
                'source'    => "webform_lp",
                'accessKey' => "R2OYR1AFVS5CRZFXEQUAL00C96O2MV160QYYBD0I1OXQV3C2V1T5WE0YIGW4"
            ])
        ]
    ];

    // Initialize multi-cURL
    $mh = curl_multi_init();
    $handles = [];

    // Loop through each endpoint to prepare the request
    foreach ($endpoints as $endpoint) {
        $ch = curl_init($endpoint['url']);
        
        if ($endpoint['type'] === 'json') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($endpoint['data']));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fullData));
        }
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_multi_add_handle($mh, $ch);
        $handles[] = $ch;
    }

    // Execute all requests concurrently
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh);
    } while ($running > 0);

    // Cleanup cURL handles
    foreach ($handles as $ch) {
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);

    // Return a JSON response
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
    exit;
}
?>