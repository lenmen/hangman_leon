<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 12-1-16
 * Time: 16:08
 */

namespace HangmanBundle\Factories;

use Broadway\ReadModel\RepositoryInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Debug\Exception\ClassNotFoundException;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReadModelFactory
{

    const gameStart = "hangman.read_model_repositor";
    const letterChosen = "hangman.read_model.projector.letter_chosen";

    /**
     * @var Container
     */
    private $services;

    /**
     * ReadModelFactory constructor.
     * @param Container $container
     */
    public function __construct(RepositoryInterface $readModel1, Rep)
    {
        $this->container = $container;
    }

    /**
     * @param $projectorClass
     * @param $entityClass
     * @return mixed
     * @throws ClassNotFoundExceptio
     */
    public function getReadModelRepository($entityName)
    {
        // Check if class exists
        strtolower(substr($entityName, 0, 1));

        if (!defined($entityName)) {
            throw new NotFoundHttpException("Const " . $entityName . " doesn't exists");
        }

        //return $this
        $this->container->get(self::$entityName);
    }
}