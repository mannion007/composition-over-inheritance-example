<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Tank\Gun;

class RailGun implements GunInterface
{
    private $roundSize = 50;

    /**
     * @return int
     */
    public function shoot() : int
    {
        echo 'ZAPPP!!!';
        return $this->roundSize;
    }

    /**
     * @return int
     */
    public function getRoundSize(): int
    {
        return $this->roundSize;
    }
}
