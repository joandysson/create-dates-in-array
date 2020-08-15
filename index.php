<?php
// require 'config.php';
// require 'db/Connection.php';
require 'utils/GerateDate.php';

// info date
$dates = GerateDate::gerate('now', '2021-01-01', ['Mon','Tue', 'Wed', 'Fri']);


// $conn->beginTransaction();
// try{
//     foreach($dates as $date){
//         Connection::insert('data_agendamento', 'data, datasalvo, idsalvo, ativo', "':data, NOW(), '423', 1'");
//         $sql = "INSERT into data_agendamento ()VALUES (:data, NOW(), '423', 1);";
//     }
//     $conn->commit();
// }catch(Exception $e) {
//     $conn->rollBack();
// }