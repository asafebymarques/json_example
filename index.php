<?php

$json = file_get_contents("http://ipinfo.io/json");
$json = json_decode($json);

echo "Seu IP: ".$json->ip."\nhost: ".$json->hostname."\nCidade: ".$json->city.
"\nRegião: ".$json->region."\nPaís: ".$json->country."\nLocalização: ".$json->loc.
"\nCEP(Postal): ".$json->postal."\nForncedor de Internet: ".$json->org;

