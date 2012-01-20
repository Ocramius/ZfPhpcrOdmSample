<?php
return array(
    'di'    => array(
        'instance' => array(
            
            //overriding workspace name
            'zfphpcrodm-session' => array(
                'parameters' => array(
                    'workspace' => 'default',
                ),
            ),
            
            //overriding used transport - allows fast switching from Jackrabbit
            //to DBAL and the inverse too
            'zfphpcrodm-repository' => array(
                'parameters' => array(
                    'transport' => 'zfphpcrodm-jackrabbittransport',
                    //'transport' => 'zfphpcrodm-dbaltransport',
                ),
            ),
            
            //overriding Jackrabbit connection parameters for Jackrabbit transport
            'zfphpcrodm-jackrabbittransport' => array(
                'parameters' => array(
                    'serverUri' => 'http://127.0.0.1:8888/server/',
                ),
            ),
            
            //override MySQL connection parameters for DBAL transport
            'zfphpcrodm-dbalconnection' => array(
                'parameters' => array(
                    'params' => array(
                        'driver'   => 'pdo_mysql',
                        'host'     => 'localhost',
                        'user'     => 'root',
                        'password' => '',
                        'dbname'   => 'test',
                    ),
                ),
            ),
            
            //overriding auth parameters
            'zfphpcrodm-credentials' => array(
                'parameters' => array(
                    'userID' => 'admin',
                    'password' => 'admin',
                ),
            ),
            
            //overriding odm configuration
            'zfphpcrodm-configuration' => array(
                'parameters' => array(
                    'proxyDir' => __DIR__ . '/../src/ZfPhpcrOdmSample/Proxy',
                    'proxyNamespace' => 'ZfPhpcrOdmSample\Proxy',
                    'autoGenerateProxyClasses' => true,
                ),
            ),
            
            //injectiong both metadata drivers in the chained driver
            'zfphpcrodm-metadatadriver' => array(
                'injections' => array(
                    // this is a pitfall... This is a quick hack initially proposed
                    // as a joke by EvanDotPro as merged config cannot allow us to add values.
                    // This is an issue that could probably be fixed in near future
                    // Use only short alnum keys
                    // This has still to be fixed somehow
                    base_convert('phpcrsample', 36, 10) => 'zfphpcrodmsample-annotationdriver',
                ),
            ),
            
            //adding an annotation driver for this module
            'zfphpcrodmsample-annotationdriver' => array(
                'parameters' => array(
                    'reader' => 'zfphpcrodm-cachedreader',
                    'paths' => array(
                        __DIR__ . '/../src/ZfPhpcrOdmSample/Document',
                    ),
                ),
            ),
            
            /* Less relevant config after here */
            
            'alias' => array(
                'document-manager' => 'ZfPhpcrOdmSample\Controller\DocumentManagerController',
                'zfphpcrodmsample-annotationdriver' => 'Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver',
            ),
            
            //DocumentManagerController, only needed if you want to switch the use a different DM instance
            /*'document-manager' => array(
                'parameters' => array(
                    'documentManager' => 'zfphpcrodm-documentmanager',
                ),
            ),*/
            
            //Adding views for this module
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options'  => array(
                        'script_paths' => array(
                            'zfphpcrodmsample' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
            
        ),
    ),
);
