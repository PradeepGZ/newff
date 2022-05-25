<?php

require("./shared/functions.php");

$data = getMembersList();
$members = $data["result"];

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Enquiry-data.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Name', 'Phone No', 'Email ID', 'City', 'Study Destination', 'Source','Medium','Campaign','Terms','Content','Created Date'));

if (count($members) > 0) {
    foreach ($members as $row) {
        fputcsv($output, $row);
    }
}