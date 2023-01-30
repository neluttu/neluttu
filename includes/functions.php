<?
function getTemplate( $TFile ) {
    global $Result;
    $File = "template/" . $TFile . ".html";
    $handle = fopen( $File, "r" );
      if ( filesize( $File ) > 0 ) {
        $File = fread( $handle, filesize( $File ) );
        $File = str_replace( '[-ACTION-]', $Result, $File );
    } 
    else 
      $File = '';
    fclose( $handle );
    return $File;
}

function sendMail( $To, $ToEmail, $Subject, $Body ) {
  require_once "Mail.php";

  $headers = array( 'MIME-Version' => '1.0rn',
    'Content-Type' => "text/html; charset=UTF-8",
    'From' => "AboutFood <admin@aboutfood.ro>",
    'To' => $To . " <" . $ToEmail . ">",
    'Subject' => $Subject );

  $smtp = Mail::factory( 'smtp',
    array(
      'host' => 'mail.aboutfood.ro',
      'port' => '587',
      'auth' => true,
      'username' => 'admin@aboutfood.ro',
      'password' => '=#_?9SX%=%Ig',
      //'debug' => true
    )
  );
  $mail = $smtp->send( $To . " <" . $ToEmail . ">", $headers, $Body );

  if ( PEAR::isError( $mail ) ) return $mail->getMessage();
  else return true;


}