<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @mixin contains unknown class App\\\\Models\\\\IdeHelperInvitation\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Models/Invitation.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @mixin contains unknown class App\\\\Models\\\\IdeHelperUser\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Models/User.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
