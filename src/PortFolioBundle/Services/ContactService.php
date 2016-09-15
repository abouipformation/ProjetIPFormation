<?php
namespace PortFolioBundle\Services;

use Doctrine\ORM\EntityManager;
use PortFolioBundle\Entity\Contact;

class ContactService
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function createContact(Contact $contact)
    {
        $this->em->persist($contact);
        $this->em->flush();
    }

    public function updateContact()
    {
        $this->em->flush();
    }

    public function deleteContact(Contact $contact)
    {
        $this->em->remove($contact);
        $this->em->flush();
    }
}