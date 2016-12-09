<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Tank\Gun;

interface GunInterface
{
    /**
     * @return int
     */
    public function shoot() : int;

    /**
     * @return int
     */
    public function getRoundSize() : int;
}
