<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Tank\Track;

class SuperHeavyDutyTrack implements TrackInterface
{
    public function drive() : int
    {
        echo 'Clunk Clunk Clunk' . PHP_EOL;
        return 80;
    }
}
