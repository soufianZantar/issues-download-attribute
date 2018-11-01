<?php
/**
 * Created by PhpStorm.
 * User: sofian
 * Date: 01/11/18
 * Time: 15:03
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class ExportController extends Controller
{
    /**
     * @Route("/json/{lang}/{nom}.json", name="exportPublicJSON")
     */
    public function exportJSONAction($lang, $nom)
    {
        var_dump($lang);
        var_dump($nom);
        die();
        dd($lang, $nom);
        $nomfic = $_SERVER ["DOCUMENT_ROOT"] . "/json/$lang/$nom.json";
        $this->render("base.html.twig", array("locale"=> 'fr', "nom" => "nom"));
        return $this->exportJSON($nom, $nomfic);

    }

    /**
     * @Route("/", name="exportPublic")
     */
    public function indexAction()
    {

        return $this->render("base.html.twig", array("locale"=> 'fr', "nom" => "nom"));

    }

}