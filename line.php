 <?php
  

function send_LINE($msg){
 $access_token = 'w3LImLHstuTzvQRXgDW2a56HDhYkd5FsVkCadKDBGbKTeDO/PqkRg1Uq55/9BPuNLUMRAlGGfmzKibrcHiLrJdBRAoiqmUDFiwNzRjrIuy+qNzv3Ub2jMLEor3cgYoFB+Am0wbO+GaBv/ewr0glRFgdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U34ce7f2cb13b885f88e4e9ef77ec0d76',
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
