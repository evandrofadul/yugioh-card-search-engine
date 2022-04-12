<?php 
    
    $json = file_get_contents('cardinfo.json');
    $data = json_decode($json, true);
    error_reporting(error_reporting() & ~E_NOTICE);
    
    if ($_REQUEST)
    {
        foreach ($data['data'] as $item)
        {
            switch ($item['name'])
            {
                case $_REQUEST['name']:
                    $name = $item;
                break;
            }
        }
        // Se o nome da carta nao existir, retorna Bad Request.
        if(empty($name))
        {
            return http_response_code(400);
        } else {
            echo json_encode($name, JSON_UNESCAPED_UNICODE);
        }

    } else {
        // Gerador de carta aleatória.
        $rand = array_rand($data['data'], 1);
        $dataRand = $data['data'][$rand];

        echo json_encode($dataRand, JSON_UNESCAPED_UNICODE);
    }
    
?>