<?php 
$target = mktime(0, 0, 0, 6, 25, 2019);$today = time (); 
$difference =($target-$today); 
$days =(int) ($difference / (60 * 60 * 24)); 
$hours =(int) (($difference % (60 * 60 * 24)) / (60 * 60));
$minutes =(int) (($difference % (60 * 24)) / 60);

print "Countdown $days days, $hours hours and $minutes minutes" ;


?> 