<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Tank\Gun;

class LightCannon implements GunInterface
{
    private $roundSize = 1;

    /**
     * @return int
     */
    public function shoot() : int
    {
        echo 'Bang!!!';
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
