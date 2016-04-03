<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 27-3-2016
 * Time: 15:30
 */

include('user.php');

$user1 = new Member('Brad', 'brad@emial.com', 'Nov 14');

echo $user1->getEverythingFromMember();

