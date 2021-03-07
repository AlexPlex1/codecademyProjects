<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "Starting Currency:\n";
echo "Riel: ${riel}\n";
echo "Kyat: ${kyat}\n";
echo "Krones: ${krones}\n";
echo "Lek: ${lek}\n";

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

echo "\n\n";

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "Currency after exchanges:\n";
echo "Usd from riel: ${usd_from_riel}\n";
echo "Usd from kyat: ${usd_from_kyat}\n";
echo "Usd from krones: ${usd_from_krones}\n";
echo "Usd from lek: ${usd_from_lek}\n";

$exchange_fee = 1;

$total_usd = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek + $exchange_fee * 4;

echo "\n\n";

echo "Total usd after exchanges and fees: " . round($total_usd, 2);
