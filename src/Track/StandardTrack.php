<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Tank\Track;

class StandardTrack implements TrackInterface
{
    public function drive() : int
    {
        echo 'Rattle Rattle Rattle' . PHP_EOL;
        return 10;
    }
}
