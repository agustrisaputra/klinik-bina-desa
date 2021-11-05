<?php

function csvToArray($filename = '', $header, $delimiter = ',') {
    $data = [];

    if (!file_exists($filename) || !is_readable($filename)) return false;

    if (($handle  = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            $data[] = array_combine($header, $row);
        }

        fclose($handle);
    }

    return $data;
}
