<?php
require 'config.php';
require 'db/Connection.php';
require 'utils/GerateDate.php';

// Generate Dates without the days Monday, Tuesday, Wednesday, thursday, saturday, Sunday
$dates = GerateDate::gerate('2021-01-01', '2021-12-31', ['Mon', 'Tue', 'Wed', 'Thu', 'Sat', 'Sun']);

foreach($dates as $date){
    $connection = new Connection();
    $connection::insert(
        'dates',
        'date, create_at',
        ":date, NOW()",
        [':date' => "{$date} 08:00:00"]
    );
}