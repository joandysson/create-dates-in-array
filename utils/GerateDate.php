<?php

trait GerateDate {
    public static function gerate(?string $start = 'now', ?string $end = 'now', ?array $removeDys = []) : array
    {
        $period = new DatePeriod(new DateTime($start), new DateInterval('P1D'), $end = new DateTime($end));
        $valids = [];

        foreach($period as $item){
            if(!in_array($item->format("D"), $removeDys)){
                $valids[] = $item->format('Y-m-d');
            }
        }
        return $valids;
    }
}