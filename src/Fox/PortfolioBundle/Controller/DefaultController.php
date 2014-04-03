<?php
    
namespace Fox\PortfolioBundle\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
    
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('FoxPortfolioBundle:Default:index.html.twig', array('page'=>"accueil"));
    }
    /**
     * @Route("/contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
         $form = $this->createFormBuilder()
            ->add('name', 'text', array('attr'=>array('class'=>'form-control','placeholder'=>'Nom')))
            ->add('email', 'email', array('attr'=>array('class'=>'form-control','placeholder'=>'Email')))
            ->add('message', 'textarea', array('attr'=>array('class'=>'form-control','placeholder'=>'Message')))
            ->getForm();
         $form->handleRequest($request);
         if($form->isValid()){
             mail ( "renard_julien@hotmail.fr" , "Contact" , $form->get('name')->getData().$form->get('name')->getData().$form->get('name')->getData());
             echo("ok");
         }
        return $this->render('FoxPortfolioBundle:Default:contact.html.twig', array('page'=>"contact", 'form' => $form->createView()));
    }
    /**
     * @Route("/curriculumvitae")
     * @Template()
     */
    public function curriculumvitaeAction()
    {
        return $this->render('FoxPortfolioBundle:Default:curriculumvitae.html.twig', array('page'=>"curriculumvitae"));
    }
    /**
     * @Route("/curriculumvitaepdf")
     * @Template()
     */
    public function curriculumvitaepdfAction()
    {
        return $this->render('FoxPortfolioBundle:Default:curriculumvitaepdf.html.twig', array('page'=>"curriculumvitae"));
    }
    /**
     * @Route("/stifco")
     * @Template()
     */
    public function stifcoAction()
    {
        return $this->render('FoxPortfolioBundle:Default:stifco.html.twig', array('page'=>"stifco"));
    }
    /**
     * @Route("/symfony")
     * @Template()
     */
    public function symfonyAction()
    {
        return $this->render('FoxPortfolioBundle:Default:symfony.html.twig', array('page'=>"symfony"));
    }
    /**
     * @Route("/stage")
     * @Template()
     */
    public function stageAction()
    {
        return $this->render('FoxPortfolioBundle:Default:stage.html.twig', array('page'=>"stage1"));
    }
    /**
     * @Route("/stagedeux")
     * @Template()
     */
    public function stagedeuxAction()
    {
        return $this->render('FoxPortfolioBundle:Default:stagedeux.html.twig', array('page'=>"stage2"));
    }
    /**
     * @Route("/qog")
     * @Template()
     */
    public function qogAction()
    {
        return $this->render('FoxPortfolioBundle:Default:qog.html.twig', array('page'=>"qog"));
    }
    /**
     * @Route("/tableau")
     * @Template()
     */
    public function tableauAction()
    {
        return $this->render('FoxPortfolioBundle:Default:tableau.html.twig', array('page'=>"tableau"));
    }
    /**
     * @Route("/veille")
     * @Template()
     */
    public function veilleAction()
    {
        return $this->render('FoxPortfolioBundle:Default:veille.html.twig', array('page'=>"veille"));
    }
}