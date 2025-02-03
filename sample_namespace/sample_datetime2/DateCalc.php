<?php
namespace App\Models;
class DateCalc {

    public function getToday() {
        $dt = new \DateTime();
        return $dt->format('l');
    }

}