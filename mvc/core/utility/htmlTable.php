<?php

namespace utility;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<!DOCTYPE html>';
        $tableGen .= '<html lang="en">';
        $tableGen .= '<head>';
        $tableGen .= '<meta charset="utf-8">';
        $tableGen .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $tableGen .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
        $tableGen .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
        $tableGen .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><style>th, td {padding: 6px; text-align: left;
}</style></head>';
        $tableGen .= '<div class="container">';
        $tableGen .= '<body><table border="1" class="table-striped">';
        $tableGen .= '<tr>';
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
          if($heading =='id'){
            $tableGen .= '<th>tasks</th>';
          }else{
            $tableGen .= '<th>' . $heading . '</th>';
          }
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=edit&id=' . $value . '"><span class="glyphicon glyphicon-pencil"></span>edit</a><br><a href="index.php?page=' . $referingPage . '&action=delete&id=' . $value . '"><span class="glyphicon glyphicon-trash">delete</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table></div>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>