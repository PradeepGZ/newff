<?php

require("./shared/functions.php");

$data = getContactUs();
$members = $data["result"];

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=write-to-us.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Name', 'Email ID', 'Phone No', 'City', 'Study Destination', 'Source','Medium','Campaign','Terms','Content','Created Date'));

if (count($members) > 0) {
    foreach ($members as $row) {
        fputcsv($output, $row);
    }
}