<?php

require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);


    //To Get Text Result
     $complete = $open_ai->completion([
         'model' => 'text-davinci-003',
         'prompt' => 'heloo',
         'temperature' => 0.9,
         'max_tokens' => 1500,
         'frequency_penalty' => 0,
         'presence_penalty' => 0.6,
     ]);

   
    $complete = json_decode($complete,true);
//var_dump($complete);
     echo $complete['choices'][0]['text'];
    



?>