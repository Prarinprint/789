 <?php
  

function send_LINE($msg){
 $access_token = 'NHtmYtJsUVAvNMmNdfEDYsJIf6VZ9pte4tHb9isBNjZdjK3gcslipEfkvrDI1d//i+BcyVpnYo5o+5jnJnRHD9U4KgM4T5Xt2JIeua7N+aLuNkG07euhi0r14I1mKRFWLQ0cgTWPVMEu0pWkEUH9sAdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue77a191627f6ac91899e75d92264310c',
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
