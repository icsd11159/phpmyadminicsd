<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21/5/2017
 * Time: 9:34 μμ
 */
function showAlertDialogMethods($warningText)
{
    print '<script type="text/javascript">';
    print 'alert("' . $warningText . '")';
    print '</script>';
}

function add_new_thesis($link, $title, $ar_foithtwn, $stoxos, $perigrafh, $gnwseis, $onoma_f, $epitheto_f, $id_role_f, $date_dhm, $date_an, $date_olok, $vathmos)
{
    $sql = "INSERT INTO diplwmatikh (title,ar_foithtwn,stoxos,perigrafh,gnwseis,onoma_f,epitheto_f,id_role_f,date_dhm,date_an,date_olok,vathmos) VALUES ('$title','$ar_foithtwn','$stoxos','$perigrafh','$gnwseis','$onoma_f','$epitheto_f','$id_role_f','$date_dhm','$date_an','$date_olok','$vathmos') ";
    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";

    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}