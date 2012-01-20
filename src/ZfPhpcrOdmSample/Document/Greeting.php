<?php
namespace ZfPhpcrOdmSample\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * 
 * Sample Document used to demonstrate DocumentManager functionality
 * 
 * @author Marco Pivetta <ocramius@gmail.com>
 * 
 * @PHPCR\Document(repositoryClass="ZfPhpcrOdmSample\DocumentRepository\Greeting")
 */
class Greeting
{
    
    /**
     * @PHPCR\Id(strategy="repository")
     */
    private $id;

    /**
     * @PHPCR\String
     */
    private $content;
    
    /**
     * @return string|null
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return string|null
     */
    public function getContent() {
        return $this->content;
    }
    
    /**
     * @param string $content 
     */
    public function setContent($content) {
        $this->content = (string) $content;
    }
    
}