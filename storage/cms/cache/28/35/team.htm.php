<?php 
class Cms5821dba8ee1f7799731789_2145090206Class extends \Cms\Classes\PartialCode
{
public function onStart() {

    $this['team'] = [
        ['image' => 'member1.jpg', 'name' => 'Tracy', 'position' => 'Designer'       , 'facebook' => '#', 'twitter' => '#', 'linkedin' => '#'],
        ['image' => 'member2.jpg', 'name' => 'Mary' , 'position' => 'Developer'      , 'facebook' => '#', 'twitter' => '#', 'linkedin' => '#'],
        ['image' => 'member3.jpg', 'name' => 'Julia', 'position' => 'Director'       , 'facebook' => '#', 'twitter' => '#', 'linkedin' => '#'],
        ['image' => 'member4.jpg', 'name' => 'Linda', 'position' => 'Chief Executive', 'facebook' => '#', 'twitter' => '#', 'linkedin' => '#']
    ];

    $this['skills'] = [
        'Photoshop' => 90,
        'HTML'      => 75,
        'WordPress' => 68,
        'Marketing' => 95
    ];

}
}
