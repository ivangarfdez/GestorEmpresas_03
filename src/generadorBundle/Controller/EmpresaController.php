<?php

namespace generadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpresaController extends Controller
{
    public function allAction()
    {
        //IMP
        //Hay un Error en el nombre de la entidad!!!!!

        $repository = $this->getDoctrine()->getRepository('generadorBundle:EmrpresaFCT');
        //find all empresas
        $empresa = $repository->findAll();
        return $this->render('generadorBundle:Empresa:all.html.twig',array("emrpresa_f_c_t"=> $empresa));
    }

}
