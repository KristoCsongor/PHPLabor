<?php
declare(strict_types=1);
include "User.php";

$user1 = new User("Kiss", "Lajos", 2000);
/*echo $user1;
User::setMinkor(16);
echo "<br>" . User::getMinkor() . "<br>";
*/
$user2 = new User("Nagy", "Lajos", 2010);
$user3 = new User("Molnar", "Lajos", 2002);
$user4 = new User("Bacs", "Lajos", 2011);
$user5 = new User("Kelemen", "Lajos", 2006);

$userArray = [$user1, $user2, $user3, $user4, $user5];

/*
 * function selecting($user): bool
{
    if($user->getSzulEv() < 2007) {
        return false;
    }
    return true;
}

$newUsers = array_filter($userArray, "selecting");
*/
global $limitAge;
$limitAge = 2007;

$newUsers = array_filter($userArray, function($user) use($limitAge) {
    return $user->getSzulEv() < $limitAge;
});

foreach ($newUsers as $user) {
    echo $user . "<br>";
}

