<?php
namespace ZfPhpcrOdmSample;

/**
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class Module
{
    public function init()
    {
        $this->initAutoloader();
    }

    public function initAutoloader()
    {
        require __DIR__ . '/autoload_register.php';
    }

    /**
     *
     * @return Config
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

}
