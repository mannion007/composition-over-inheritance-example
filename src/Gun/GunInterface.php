<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
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
