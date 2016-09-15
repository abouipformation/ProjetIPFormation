<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/09/16
 * Time: 15:33
 */

namespace PortFolioBundle\Controller;
use PortFolioBundle\Entity\Contact;
use PortFolioBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PortFolioController
 * @package PortFolioBundle\Controller
 * @Route("/portfolio")
 */
class PortFolioController extends Controller
{

    /**
     * @Route("/", name="home_page")
     * @Method({"GET", "POST"})
     */
    public function homeAction()
    {
        return $this->render("PortFolioBundle:PortFolio:home.html.twig", []);

    }

    /**
     * @Route("/contact", name="portfolio_contact")
     * @Method({"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form_contact =  $this->createForm(ContactType::class, $contact);
        $form_contact->handleRequest($request);
        if ($form_contact->isSubmitted() && $form_contact->isValid()) {
            $this->get('portfolio.contact')->createContact($contact);
            $this->addFlash('success', 'Contact ajouté avec succes');
        }
        return $this->render("PortFolioBundle:PortFolio:contact.html.twig", ['form_contact' => $form_contact->createView()]);
    }

    /**
     * @Route("/about", name="portfolio_about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render("PortFolioBundle:PortFolio:about.html.twig", []);


    }

    /**
     * @Route("/project", name="portfolio_project")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function projectAction()
    {
        return $this->render("PortFolioBundle:PortFolio:project.html.twig", []);
    }
}