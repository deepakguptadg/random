<?php
    $data = array('AgencyID' => '19');
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => "POST",
            'content' => http_build_query($data),
            'timeout' => 30,
        ),
    );
    $context = stream_context_create($options);
    $retour = @file_get_contents("http://103.133.215.252:4349/api/RMSMaster/DropDownIncidentReports", false, $context);
    print_r($retour);
?>