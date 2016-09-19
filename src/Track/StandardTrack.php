<?php

namespace Tank\Track;

class StandardTrack implements TrackInterface
{
    public function drive()
    {
        echo 'RattleRattleRattle';
        return 10;
    }
}