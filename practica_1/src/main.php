<?php
$command = array();
$command['docker'] = array(
    array("command" => "docker images", "Descripción" => "Ver los contenedores existentes", "struture"=>"REPOSITORY   TAG       IMAGE ID   CREATED   SIZE"),
);
echo json_encode($command, JSON_FORCE_OBJECT);
