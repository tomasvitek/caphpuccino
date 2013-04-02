<?php
/**
 * fraphpuccino
 * Tiny static-like website generator written in Nette (php).
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 *
 * @copyright   Copyright (c) 2013 Tomas Vitek
 * @author      Tomas Vitek ~ http://tomasvitek.com
 * @link        http://github.com/tomikvitek/fraphpuccino
 * @version     0.1
 */

// Load Nette
require __DIR__ . '/app/libs/nette.min.php';
require __DIR__ . '/app/libs/ErrorPresenter.php';

use Nette\Diagnostics\Debugger,
	Nette\Application\Routers\Route,
    Nette\Templating\FileTemplate,
    Nette\Utils\Strings;

// Debugger
$configurator = new Nette\Config\Configurator;
$configurator->enableDebugger(__DIR__ . '/app/log', 'admin@example.com');
$configurator->setTempDirectory(__DIR__ . '/app/temp');
$container = $configurator->createContainer();
$container->application->errorPresenter = 'Error';

$container->router[] = new Route('[<page>]', function($presenter, $page) use ($container) {
    if ($page == 'index') {
        $request = $container->getService('httpRequest');
        return $presenter->redirectUrl($request->url->basePath);
    }
    if (!$page) {
        $page = 'index';
    }

    $path = __DIR__ . '/app/templates/' . $page . '.latte';

    if (!file_exists($path))
    	throw new \Nette\Application\BadRequestException('Page Not Found', 404);

	$template = $presenter->createTemplate()
    	->setFile($path);

    return $template;
});

$container->application->run();