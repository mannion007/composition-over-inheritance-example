<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Tank;

use Tank\Gun\GunInterface;
use Tank\Track\TrackInterface;

class Tank
{
    private $gun;
    private $track;
    private $fuel;

    /**
     * Tank constructor.
     * @param GunInterface $gun
     * @param TrackInterface $track
     */
    public function __construct(GunInterface $gun, TrackInterface $track)
    {
        $this->fuel = 50;
        $this->ammo = 100;
        $this->gun = $gun;
        $this->track = $track;
    }

    /**
     * @return bool
     */
    public function canShoot()
    {
        return $this->ammo >= $this->gun->getRoundSize();
    }

    public function shoot()
    {
        if (true === $this->canShoot()) {
            $this-> ammo -= $this->gun->shoot();
            echo '(' . $this->ammo . ' ammo remaining)' . PHP_EOL;
        } else {
            echo 'CLICK CLICK' . PHP_EOL;
        }
    }

    public function drive()
    {
        $this->fuel -= $this->track->drive();
    }
}
