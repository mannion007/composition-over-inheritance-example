<?php

namespace Tank;

use Tank\Gun\GunInterface;
use Tank\Track\TrackInterface;

class Tank
{
    private $ammo;
    private $fuel;
    
    private $gun;
    private $track;

    public function __construct(GunInterface $gun, TrackInterface $track)
    {
        $this->ammo = 100;
        $this->fuel = 100;

        $this->gun = $gun;
        $this->track = $track;
    }

    public function canShoot()
    {
        return $this->ammo >= $this->gun->getRoundSize();
    }

    public function shoot()
    {
        if($this->canShoot())
        {
            $this-> ammo -= $this->gun->shoot();
            echo $this->ammo . ' ammo remaining';
        } else {
            echo 'CLINK CLINK';
        }
    }

    public function reload()
    {
        $this->ammo = 100;
    }

    public function drive()
    {
        $fuelUsed = $this->track->drive();
    }

}