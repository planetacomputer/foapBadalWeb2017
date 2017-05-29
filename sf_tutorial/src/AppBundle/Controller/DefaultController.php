<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/about_us", name="about")
     */
    public function aboutAction(Request $request){
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menuAction(Request $request){
        //$pdo = new \PDO($dsn, $username, $password);
        $logger = $this->get('logger');
        try{
            $dbh = new \PDO("mysql:host=localhost;dbname=".$this->container->getParameter('database_name'),$this->container->getParameter('database_user'), $this->container->getParameter('database_password'), array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $day_number = date('w');
            $logger->info($day_number);
            $sql = "SELECT * FROM menu WHERE diaset = :day_number";
            $query = $dbh->prepare($sql);
            $query -> bindParam(':day_number', $day_number, \PDO::PARAM_INT);
            $query->execute();

            $results=$query->fetchAll(\PDO::FETCH_OBJ);

        }
        catch (PDOException $e){
            exit("Error: " . $e->getMessage());
        }
        // replace this example code with whatever you need
        return $this->render('default/menu.html.twig', array('menu' => $results));
    }

    /**
     * @Route("/where", name="where")
     */
    public function whereAction(Request $request){
        // replace this example code with whatever you need
        return $this->render('default/where.html.twig');
    }


    /**
     *  @Route("/menu/{id}", name="menu_show", requirements={"id": "\d+"})
     */
    public function showMenu(Request $request){
        $id = $request->get('id');
        $dbh = new \PDO("mysql:host=localhost;dbname=".$this->container->getParameter('database_name'),$this->container->getParameter('database_user'), $this->container->getParameter('database_password'), array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $sql = "SELECT * FROM menu WHERE id = :id";
        $query = $dbh->prepare($sql);
        $query -> bindParam(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $producte=$query->fetch(\PDO::FETCH_OBJ);

        return $this->render('default/menuProducte.html.twig', array('producte' => $producte));
    }
}
