<?php
namespace ZfPhpcrOdmSample\DocumentRepository;

use Doctrine\ODM\PHPCR\Id\RepositoryIdInterface,
    Doctrine\ODM\PHPCR\DocumentRepository as BaseDocumentRepository;

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