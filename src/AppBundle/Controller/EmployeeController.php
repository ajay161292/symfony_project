<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Employees;

class EmployeeController extends Controller
{
    /**
     * @Route("/employee", name="employee_list")
     */
    public function indexAction(Request $request)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();
        $emprepository = $em->getRepository('AppBundle:Employees')->findAll();
        $data['data'] = $emprepository;
        // echo'<pre>';
        // print_r($emprepository);exit;

        // replace this example code with whatever you need
        return $this->render('employee/index.html.twig',$data);
            // ,['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        // ]);
    }

    public function Editaction(Request $request){
        echo $request->get();
    }
}
