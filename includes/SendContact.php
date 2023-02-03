<?
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ini_set("include_path", '/home/neluttu/php:' . ini_get("include_path") );
    function sendMail($ToName,$ToEmail,$Body)
    {
        require_once "Mail.php";
        require_once "Mail/mime.php";
        
        $headers = array ('MIME-Version' => '1.0rn',
                          'Content-Type' => "text/html; charset=UTF-8",
                          'From' => 'Ionel Olariu <contact@ionel.olariu.dev>',
                          'To' => $ToName." <'.$ToEmail.'>",
                          'Subject' => 'Online contact'
                        );
        
        $smtp = Mail::factory('smtp',
                                array(
                                    'host' => 'ssl://ionel.olariu.dev',
                                    'port' => '465',
                                    'auth' => true,
                                    'username' => 'contact@ionel.olariu.dev',
                                    'password' => 'eQCLnK%@M?EQ',
                                    //'debug' => true
                                    )
                            );
        $mail = $smtp->send($ToName." <".$ToEmail.">", $headers, $Body);
    
        if (PEAR::isError($mail)) echo $mail->getMessage();
        else return true;
    }
    
    $Name = strip_tags(trim($_POST["Name"]));
            $Name = str_replace(array("\r","\n"),array(" "," "),$Name);
    $Email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);
    $Message = trim($_POST["Message"]);

    // Check that data was sent to the mailer.
    if ( empty($Name) OR empty($Message) OR !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }

    $Body = "Name: $Name\n";
    $Body .= "Email: $Email\n\n";
    $Body .= "Message:\n$Message\n";

    if (sendMail('Ionel Olariu','ionel.olariu@gmail.com',$Body)) {
    //if ('1' != '1') {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Your message has been sent. :-)";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Something went wrong... :-(";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Forbidden! :-(";
}
?>