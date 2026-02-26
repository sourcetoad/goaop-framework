<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:\\$table \\(array\\{name\\: string, schema\\?\\: string, indexes\\?\\: array, uniqueConstraints\\?\\: array, options\\?\\: array\\<string, mixed\\>, quoted\\?\\: bool\\}\\) does not accept array\\{\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridge/Doctrine/MetadataLoadInterceptor.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
