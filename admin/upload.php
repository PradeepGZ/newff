<?php

include 'vendor/autoload.php';

$connect = new PDO("mysql:host=localhost;dbname=saa", "root", "");

if($_FILES["import_excel"]["name"] != '')
{
    $allowed_extension = array('xls', 'csv', 'xlsx');
    $file_array = explode(".", $_FILES["import_excel"]["name"]);
    $file_extension = end($file_array);

    if(in_array($file_extension, $allowed_extension))
    {
        $file_name = time() . '.' . $file_extension;
        move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
        $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

        $spreadsheet = $reader->load($file_name);

        unlink($file_name);

        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $insert_data = array(
                ':fname'  => $row[0]??'',
                ':lname'  => $row[1]??'',
                ':email'  => $row[2]??'',
                ':contact'  => $row[3]??'',
                ':btype'  => $row[4]??'',
                ':bname'  => $row[5]??'',
                ':utm_source'  => $row[6]??'',
                ':utm_medium'  => $row[7]??'',
                ':utm_campaign'  => $row[8]??'',
                ':utm_term'  => $row[9]??'',
                ':utm_content'  => $row[10]??'',
                ':offline_traking'  => $row[11]??'',
                ':created_on'  => date('Y-m-d H:i:s',strtotime($row[12]))??date('Y-m-d H:i:s'),
            );

            $query = "
                   INSERT INTO registrations 
                   (fname, lname, email, contact, btype, bname, utm_source, utm_medium, utm_campaign, utm_term, utm_content, offline_traking, created_on) 
                   VALUES (:fname, :lname, :email, :contact,:btype,:bname,:utm_source,:utm_medium,:utm_campaign,:utm_term,:utm_content,:offline_traking,:created_on)
                   ";

            $statement = $connect->prepare($query);
            $statement->execute($insert_data);
        }
        $message = '<div class="alert alert-success">Data Imported Successfully</div>';

    }
    else
    {
        $message = '<div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div>';
    }
}
else
{
    $message = '<div class="alert alert-danger">Please Select File</div>';
}

echo $message;