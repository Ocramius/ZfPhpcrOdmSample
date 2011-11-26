<?php
namespace ZfPhpcrOdmSample\DocumentRepository;

use Doctrine\ODM\PHPCR\Id\RepositoryIdInterface,
    Doctrine\ODM\PHPCR\DocumentRepository as BaseDocumentRepository;

/**
 * Simple repository used by PHPCR to generate ids for the "Greeting" document
 * 
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class Greeting extends BaseDocumentRepository implements RepositoryIdInterface
{
    /**
     * Generate a document id
     *
     * @param object $document
     * @return string
     */
    public function generateId($document)
    {
        return '/greeting' . uniqid();
    }
    
}