<?php

require('routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('103.195.140.98', 'NFADMIN', 'NFADMIN')) {

   $API->write('/interface/pppoe-server/print');

   $READ = $API->read(false);
   // $ARRAY = $API->parse_response($READ);
   echo '<pre>';
   print_r($ARRAY);
   echo '</pre>';
   $API->disconnect();
}else {
   echo 'Disconnected';
}
