<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $formData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'Mobile' => $_POST['Mobile'],
        'date' => $_POST['date'],
        'notes' => $_POST['notes']
    ];

    // Collect UTM parameters
    $utmData = [
        'utm_source' => $_POST['utm_source'] ?? '',
        'utm_medium' => $_POST['utm_medium'] ?? '',
        'utm_campaign' => $_POST['utm_campaign'] ?? '',
        'utm_term' => $_POST['utm_term'] ?? '',
        'utm_content' => $_POST['utm_content'] ?? ''
    ];

    // Merge form data and UTM parameters
    $payload = array_merge($formData, $utmData);

    // Define API endpoints
    $endpoints = [
        [
            'url' => 'https://script.google.com/macros/s/AKfycbwDpspcBxJWPhTKULHFY_OnRe5bSMCR7Bnr7o1vO38SxA2CWknlGO6TE6_zrlKkNz_Q/exec',
            'type' => 'form',
            'data' => $payload
        ],
        [
            'url' => 'https://c4za7glq.OptionPaymoney.in/a4slqzperan5z/qascvghktrbcqplkmnska/webhook-s2pweb-5xplqizor',
            'type' => 'json',
            'data' => [
                'name' => $payload['name'],
                'mobile' => $payload['Mobile'],
                'email' => $payload['email'],
                'message' => $payload['notes'],
                'source' => "book_a_demo_LP",
                'accessKey' => "R2OYR1AFVS5CRZFXEQUAL00C96O2MV160QYYBD0I1OXQV3C2V1T5WE0YIGW4",
                'utm_source' => $payload['utm_source'],
                'utm_medium' => $payload['utm_medium'],
                'utm_campaign' => $payload['utm_campaign'],
                'utm_term' => $payload['utm_term'],
                'utm_content' => $payload['utm_content']
            ]
        ]
    ];

    // Initialize multi cURL
    $mh = curl_multi_init();
    $handles = [];

    foreach ($endpoints as $endpoint) {
        $ch = curl_init($endpoint['url']);
        
        if ($endpoint['type'] === 'json') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($endpoint['data']));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($endpoint['data']));
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_multi_add_handle($mh, $ch);
        $handles[] = $ch;
    }

    // Execute all requests
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh);
    } while ($running > 0);

    // Close handles
    foreach ($handles as $ch) {
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);

    // Return success response
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
    exit;
}