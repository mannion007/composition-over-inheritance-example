<?php

namespace Tank\Gun;

class Cannon implements GunInterface
{

    private $roundSize = 1;

    public function shoot()
    {
        echo 'BOOM';
        return $this->roundSize;
    }

    public function getRoundSize()
    {
        return $this->roundSize;
    }
}