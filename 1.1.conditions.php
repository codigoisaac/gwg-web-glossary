<?php

$firstName = 'Isaac';
$lastName = 'Muniz';

if ($firstName == 'Isaac' && $lastName == 'Muniz') {
	echo 'Hello, Isaac.';
} else if ($lastName == 'Muniz') {
	echo 'Hello, Muniz family member.';
} else if ($firstName == 'Isaac' || $lastName == 'Isaac') {
	echo 'Hello, stranger who have the beautiful word Isaac in the name';
} else {
	echo 'Hello, stranger.';
}
