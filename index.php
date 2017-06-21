<?php 
    
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

date_default_timezone_set('Europe/London');
    
     try {
			
    $ch = curl_init("https://fcm.googleapis.com/fcm/send");

    //The device token.
   // $token = "XXdthLHytnDJ4:APA91bFQDCBOT-ecgEfl8HNvQuMLK05WILU_SmK4mKEOGFKO6IP7hXthdp7Fz95RyQQITdufFES9GBW6nbWBMjQzgZqIOA1LM4cCGs9gKn4DoPy1nx8QhVioNGtbFuLHMQCHIkecMDhg"; //token here
	$token = "XXfynwCi3Tg98:APA91bGxkAF8aSppJ9TLPznYYJOYB73rXTc1lJVL3fefBPgYl7wnr83dqlGL0Ca8AipkSXbm9oa2F826Hqldtai7o3wvWe53y8mPslpw4pXgWZFlpH9u3mrwnBwQv1hss8ta-3kx1VtE";
    $token = "XXdslnXSkNSvg:APA91bEwvpz7G8EQtXvKgxjRcZKForUVK4-4h15_OiWx3uRiG_GjGpZ64JubvNp_ngPXmBFwrk7mQjbW62qXoEgzXIZajv4S2X5qMnKT-ATmFpjPawYlrTf3_eewvIfBMbZOHuVhYTvm";
    
    //Title of the Notification.
    $title = "AssalamuAlikum";

    //Body of the Notification.
    $body = "We are testing. Bear island knows no king but the king in the north, whose name is stark.";

    //Creating the notification array.
    $notification = array('title' =>$title , 'text' => $body);

    //This array contains, the token and the notification. The 'to' attribute stores the token.
    $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');

    //Generating JSON encoded string form the above array.
    $json = json_encode($arrayToSend);
    //Setup headers:
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key=XAAAAMfHdMOU:APA91bGzz-Q3mDczXfHSgYHdZUVoWKl4n8nRse013wJuVUiB10kHi3ckk2dOGdeJ_5nCn3ek8LqjgHBaa4_3komBdEWsY7LTLfbV7ggtsLXqxNd-bNEMd5_oywnWuW0W_VZQbv3NliiV'; // key here

    //Setup curl, add headers and post parameters.
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     

    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);  
    
    
    
    

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
//curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $notification ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;
exit;
       
			}
		catch(Exception $e)
			{
			//print_r();
			
			echo $e->getMessage();
			}

?>

