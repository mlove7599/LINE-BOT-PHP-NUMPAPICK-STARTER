 <?php
  

function send_LINE($msg){
 $access_token = 'ZAF7bbl0lOADgPhpRXpzpGYvXVLhXejgIWkwgusVLaNxqu9p4EfULpdEQYz1yFdf6/+z2YLbKXY450QS5dO1oLb4GKSvsl+Tgb7bI1trWU3ulz4WBSTi6rF9DBQAcrI2pXy2aBmxSLJnRBvwIWa6KAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ubc56224df6fd53570fc744482ab3f244',
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
