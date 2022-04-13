<?php
echo header('Content-type: application/json');

$json = file_get_contents('cardinfo.json');
$data = json_decode($json, true);

$name = '';


if ($_REQUEST) {
    foreach ($data['data'] as $item) {
        if ($item['name'] == $_REQUEST['name']) {
            $name = $item['name'];
            break;
        }
    }

    if (empty($name)) {
        echo json_encode(['error' => 'not found']);
        return http_response_code(404);
    }
    
    echo json_encode($name, JSON_UNESCAPED_UNICODE);
    return http_response_code(200);
}
// Gerador de carta aleatória.
$rand = array_rand($data['data'], 1);
$dataRand = $data['data'][$rand];

echo json_encode($dataRand, JSON_UNESCAPED_UNICODE);
return http_response_code(200);