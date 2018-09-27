<?php
/**
 * beanstalk: A minimalistic PHP beanstalk client.
 *
 * Copyright (c) 2009-2013 David Persson
 *
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright  2009-2013 David Persson <nperson@gmx.de>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/davidpersson/beanstalk
 */

//require_once '../src/Socket/Beanstalk.php';
//require_once './src/Socket/Client.php';
require './vendor/autoload.php';
use jingwu15\beanstalk\Client;

/**
 * A small benchmark to test throughput.
 */
$connection = new Client();
for ($i = 0; $i < 100000; $i++) {
	$connection->put(1024, 0, 60, $i);
}

?>
