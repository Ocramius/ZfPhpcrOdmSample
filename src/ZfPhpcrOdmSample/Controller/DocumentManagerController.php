<?php

namespace ZfPhpcrOdmSample\Controller;

use Zend\Mvc\Controller\ActionController,
    Doctrine\ODM\PHPCR\DocumentManager,
    ZfPhpcrOdmSample\Document\Greeting,
    PHPCR\Query\QueryInterface;

/**
 * Sample controller used to show basic documentManager functionality
 * 
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class DocumentManagerController extends ActionController
{
    
    /**
     * 
     * @var DocumentManager 
     */
    protected $documentManager;
    
    /**
     *
     * @param DocumentManager $documentManager 
     */
    public function __construct(DocumentManager $documentManager) {
        $this->documentManager = $documentManager;
    }
    
    public function indexAction()
    {
        return array('documentManager' => $this->documentManager);
    }
    
    public function persistGreetingAction() {
        $greeting = new Greeting();
        $greeting->setContent('Hello World!');
        $this->documentManager->persist($greeting);
        $this->documentManager->flush();
        return array('greeting' => $greeting);
    }
    
    public function listGreetingsAction() {
        $greetings = $this
            ->documentManager
            ->getRepository('ZfPhpcrOdmSample\Document\Greeting')
            ->createQuery('SELECT * FROM [nt:unstructured]', QueryInterface::JCR_SQL2)
            ->execute()
            ->getNodes();
        return array('greetings' => $greetings);
    }
    
}
