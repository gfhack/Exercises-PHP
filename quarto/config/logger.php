<?php
  //ASSIGN VARIABLES TO USER INFO
  $time = date("M j G:i:s Y");
  $ip = getenv('REMOTE_ADDR');
  $userAgent = getenv('HTTP_USER_AGENT');
  $referrer = getenv('HTTP_REFERER');
  $query = getenv('QUERY_STRING');
  $params = print_r($_REQUEST, TRUE);

  //COMBINE VARS INTO OUR LOG ENTRY
  $msg = "\nIP:" . $ip . "\nTIME: " . $time . "\nREFERRER: " . $referrer . "\nSEARCHSTRING: " . $query . "\nUSERAGENT: " . $userAgent . "\nParams: " . $params;

  //CALL OUR LOG FUNCTION
  writeToLogFile($msg);

  function writeToLogFile($msg) {
    $today = date("Y_m_d");
    $logfile = $today."_log.log";
    $saveLocation= APP_LOGS . $logfile;
    if  (!$handle = @fopen($saveLocation, "a")) {
      exit;
    }
    else {
      if (@fwrite($handle,"$msg\r\n") === FALSE) {
        exit;
      }

      @fclose($handle);
    }
  }


?>
