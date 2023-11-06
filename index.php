<?php

require('routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('111.111.23.32', 'admin', 'admin')) {

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
