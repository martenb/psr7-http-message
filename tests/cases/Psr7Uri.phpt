<?php declare(strict_types = 1);

/**
 * Test: Psr7Uri
 */

use Contributte\Psr7\Psr7Uri;
use Nette\Http\UrlScript;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

// Nette - UrlScript
test(function (): void {
	$uri = new Psr7Uri();
	$uri = $uri->withUrlScript(new UrlScript('https://contributte.org'));

	Assert::equal('https://contributte.org/', (string) $uri->getUrlScript());
	Assert::equal('https://contributte.org/', $uri->getUrlScript()->__toString());
	Assert::equal('https://contributte.org/', $uri->getUrlScript()->getAbsoluteUrl());
});
