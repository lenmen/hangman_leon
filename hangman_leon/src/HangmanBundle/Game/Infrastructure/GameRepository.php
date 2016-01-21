<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 15:45
 */

namespace HangmanBundle\Game\Infrastructure;


use Doctrine\ORM\EntityManager;

class GameRepository
{
    private $entitymanager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entitymanager = $entityManager;
    }

}