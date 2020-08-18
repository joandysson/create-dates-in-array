<?php

trait GerateDate {

    /**
    * @param null|string $start
    * @param null|string $end
    * @param null|array $removeDys
    * @return array
    */
    public static function gerate(?string $start = 'now', ?string $end = 'now', ?array $removeDys = []) : array
    {
        $timeZone = new DateTimeZone('UTC');

        $period = new DatePeriod(new DateTime($start, $timeZone), new DateInterval('P1D'), new DateTime($end, $timeZone));
        $valids = [];

        foreach($period as $item){
            if(!in_array($item->format("D"), $removeDys)){
                $valids[] = $item->format('Y-m-d');
            }
        }
        return $valids;
    }
}