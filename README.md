README
======

This is a sample Module demonstrating the ZfPhpcrOdm "Zend Framework 2 - Doctrine PHPCR-ODM bridge" functionality.

Dependencies
-------------

 - This module uses ZfPhpcrOdm ( https://github.com/Ocramius/ZfPhpcrOdm ). You should already have installed ZfPhpcrOdm before continuing.
 - This module was built on the Zend Framework sample Application module ( https://github.com/zendframework/ZendSkeletonApplication/tree/master/modules/Application ). It should work without it, but some Mvc configuration would be required.

Setup
-------------

Following steps are necessary to get this project working (considering a zf2-skeleton or very similar application)

  1. cd path/to/my/zf2application
  2. git clone https://Ocramius@github.com/Ocramius/ZfPhpcrOdmSample.git modules/ZfPhpcrOdmSample
  3. open path/to/my/zf2application/config/application.config.php and add 'ZfPhpcrOdmSample' to your 'modules' configuration key (ensure it is placed after key 'ZfPhpcrOdm').
  4. adjust write permissions to allow php to write to following path:
       * path/to/my/zf2application/modules/ZfPhpcrOdmSample/src/ZfPhpcrOdmSample/Proxy

Configuration
-------------

A simple fresh instance of Jackrabbit running is enough to let this module run without configuration changes.
It writes by default on workspace "default" and connects to localhost on port 8888 using simple authentication as user "admin" with password "admin".
If you have set some password, or need to connect to a different host, just change the following module configurations:
    
    'zfphpcrodm-jackrabbittransport' => array(
        'parameters' => array(
            'serverUri' => 'http://your-host:1234/server/',
        ),
    ),
    'zfphpcrodm-credentials' => array(
        'parameters' => array(
            'userID' => 'username',
            'password' => 'secret',
        ),
    ),

Tuning for production
-------------

 * TODO

Running Examples
-------------
Just visit

  * http://your.vhost/document-manager/index
        to see if the Document Manager has been created correctly
  * http://your.vhost/document-manager/persist-greeting
        to save a new instance of ZfPhpcrOdmSample\Document\Greeting
  * http://your.vhost/document-manager/list-greetings
        to view the list of saved ZfPhpcrOdmSample\Document\Greeting
