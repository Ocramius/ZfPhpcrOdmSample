<?php
namespace ZfPhpcrOdmSample\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as ODM;

/**
 * 
 * Sample Document used to demonstrate DocumentManager functionality
 * 
 * @author Marco Pivetta <ocramius@gmail.com>
 * 
 * @ODM\Document(alias="Greeting")
 */
class Greeting
{
    
    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\String
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