 <?php
  

function send_LINE($msg){
 $access_token = 'MyJgM9Pvi1bxm2Hr924KbNrnyiaAL1W/nFmLd/fNVEb3EbLbyVxF0NFqn/rRV2bJHu4NDN/4/uPMUo1KOQZ0NDJqUPdZbX0lECj+6u7UyME2xjsIiQ3u075j0rGB42ZX7WqDdzoZAj53bbVvmd+NIgdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U56659b64df09090fb1a11b978a1f6094',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
