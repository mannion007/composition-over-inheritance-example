<?php

/** Composer autoload */
require_once('vendor/autoload.php');

use Tank\Tank;
use Tank\Gun\LightCannon;
use Tank\Gun\HeavyCannon;
use Tank\Gun\RailGun;
use Tank\Track\StandardTrack;
use Tank\Track\SuperHeavyDutyTrack;

$standardTank = new Tank(new LightCannon(), new StandardTrack());
$standardTank->shoot();
$standardTank->drive();

$heavyTank = new Tank(new HeavyCannon(), new SuperHeavyDutyTrack());
$heavyTank->shoot();
$heavyTank->drive();

$terminatorTank = new Tank(new RailGun(), new SuperHeavyDutyTrack());
$terminatorTank->shoot();
$terminatorTank->drive();