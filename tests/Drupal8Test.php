<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/CraftTest.php
 */
namespace JaegerApp\tests\Platforms;

use JaegerApp\Platforms\Drupal8;

/**
 * Jaeger - Craft object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Platforms\Craft object
 *
 * @package Jaeger\tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class Drupal8Test extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $drupal = new Drupal8();
        $this->assertTrue(method_exists($drupal, 'getDbCredentials'));
        $this->assertTrue(method_exists($drupal, 'getEmailConfig'));
        $this->assertTrue(method_exists($drupal, 'getCurrentUrl'));
        $this->assertTrue(method_exists($drupal, 'getSiteName'));
        $this->assertTrue(method_exists($drupal, 'getTimezone'));
        $this->assertTrue(method_exists($drupal, 'getSiteUrl'));
        $this->assertTrue(method_exists($drupal, 'getEncryptionKey'));
        $this->assertTrue(method_exists($drupal, 'getConfigOverrides'));
        $this->assertInstanceOf('JaegerApp\\Platforms\\AbstractPlatform', $drupal);
    }
}