<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Tank\Track;

class AntiGravityTrack implements TrackInterface
{
    public function drive() : int
    {
        echo 'Whoosh' . PHP_EOL;
        return 20;
    }
}
