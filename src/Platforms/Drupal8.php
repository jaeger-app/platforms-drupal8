<?php
/**
 * Jaeger
 *
 * @author		Eric Lamb <eric@mithra62.com>
 * @copyright	Copyright (c) 2015-2016, mithra62, Eric Lamb
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Platforms/Dupal8.php
 */
namespace JaegerApp\Platforms;

use JaegerApp\Platforms\AbstractPlatform;
use JaegerApp\Exceptions\PlatformsException;

/**
 * Jaeger - Dupal8 Platform Object
 *
 * The bridge between Jaeger code and Dupal8 specific logic
 *
 * @package Platforms\Craft
 * @author Eric Lamb <eric@mithra62.com>
 */
class Drupal8 extends AbstractPlatform
{

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms::getDbCredentials()
     */
    public function getDbCredentials()
    {
        throw new PlatformsException("Db Object isn't set");
    }

    /**
     * (non-PHPdoc)
     * 
     * @ignore
     *
     * @see \mithra62\BackupPro\Platforms\PlatformInterface::getEmailConfig()
     */
    public function getEmailConfig()
    {   
        return $this->email_config;
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\BackupPro\Platforms\PlatformInterface::getCurrentUrl()
     */
    public function getCurrentUrl()
    {
        
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms::getSiteName()
     */
    public function getSiteName()
    {
        return \Craft\craft()->getInfo('siteName');
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms::getTimezone()
     */
    public function getTimezone()
    {
        return \Craft\craft()->getTimezone();
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms\AbstractPlatform::getSiteUrl()
     */
    public function getSiteUrl()
    {
        return \Craft\craft()->getInfo('siteUrl');
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms\AbstractPlatform::getEncryptionKey()
     */
    public function getEncryptionKey()
    {
        $sec = new CSecurityManager();
        return $sec->getEncryptionKey();
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms\AbstractPlatform::getConfigOverrides()
     */
    public function getConfigOverrides()
    {
        return array();
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms\AbstractPlatform::redirect()
     */
    public function redirect($url)
    {
        // unused
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \mithra62\Platforms\AbstractPlatform::getPost()
     */
    public function getPost($key, $default = false)
    {
        return \Craft\craft()->request->getParam($key, $default);
    }
}