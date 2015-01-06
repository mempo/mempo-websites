<?php

require "../../../../lib/jsonrpcphp/includes/jsonRPCClient.php";

$chain_name = 'litecoin';

$user='litecoinrpc';

require_once 'password.LOCAL.php';

$pass=$rpcpassword;

$bitcoin = new jsonRPCClient("http://$user:$pass@127.0.0.1:9332/");
//var_dump($bitcoin);
 
$height_now = $bitcoin->getblockcount();
$height = $height_now - 6;
$hash = $bitcoin->getblockhash($height);


header("Content-Type:text/plain");
echo "$hash\n";
echo "$height\n";
echo "$chain_name\n";

// getblockhash 566545


?>
