<?php
class User
{


function validEmail($str)
{ $isValid = true;
    $atIndex = strrpos($str, "@");
    if (is_bool($atIndex) && !$atIndex)
    {
       $isValid = false;
    }
    else
    {
       $domain = substr($str, $atIndex+1);
       $local = substr($str, 0, $atIndex);
       $localLen = strlen($local);
       $domainLen = strlen($domain);
       if ($localLen < 1 || $localLen > 64)
       {
          // gjatsia e pjeses locale eshte tejkaluar
          $isValid = false;
       }
       else if ($domainLen < 1 || $domainLen > 255)
       {
          // gjatsia e pjese se domen-it eshte tejkaluar
          $isValid = false;
       }
       else if ($local[0] == '.' || $local[$localLen-1] == '.')
       {
          // pjesa lokale fillon me '.' ose mbaron me '.'
          $isValid = false;
       }
       else if (preg_match('/\\.\\./', $local))
       {
          // pjesa lokale ka dy pika te njpasnjeshme
          $isValid = false;
       }
       else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
       {
          // karkatere jo valide ne domen
          $isValid = false;
       }
       else if (preg_match('/\\.\\./', $domain))
       {
          // domeni ka dy pika te njepasnjeshe
          $isValid = false;
       }
       else if
 (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                  str_replace("\\\\","",$local)))
       {
          // karaktere jovalidene pjesen lokalce
          // pjesa lokale eshte e kuotuar
          if (!preg_match('/^"(\\\\"|[^"])+"$/',
              str_replace("\\\\","",$local)))
          {
             $isValid = false;
          }
       }
       if ($isValid && !(checkdnsrr($domain,"MX") || 
  checkdnsrr($domain,"A")))
       {
          // domena nuk eshte gjetutr ne DNS
          $isValid = false;
       }
    }
    return $isValid;

}



}

?>