<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Tank\Gun;

class HeavyCannon implements GunInterface
{
    private $roundSize = 10;

    /**
     * @return int
     */
    public function shoot() : int
    {
        echo 'KABOOM!!!';
        return $this->roundSize;
    }

    /**
     * @return int
     */
    public function getRoundSize() : int
    {
        return 1;
    }
}
