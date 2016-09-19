<?php

namespace Tank\Gun;

use Tank\Gun\GunInterface;

class RailGun implements GunInterface
{
    private $roundSize = 50;

    public function shoot()
    {
        echo 'ZAPPP';
        return $this->roundSize;
    }

    public function getRoundSize() {
        return $this->roundSize;
    } 
}