<?php
Zend\Loader\AutoloaderFactory::factory(array(
    'Zend\Loader\StandardAutoloader' => array(
        Zend\Loader\StandardAutoloader::LOAD_NS => array(
            'ZfPhpcrOdmSample' => __DIR__ . '/src/ZfPhpcrOdmSample',
        ),
    ),
));