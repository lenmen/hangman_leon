<?php
namespace Hangman\Bundle\Game\ReadModel\Doctrine;

use Broadway\ReadModel\ReadModelInterface;
use Doctrine\ORM\EntityManager;
use Simgroep\EventSourcing\EventSourcingBundle\ReadModel\ClearableRepositoryInterface;

class DoctrineRepository implements ClearableRepositoryInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var EntityRepository
     */
    private $entityRepository;

    /**
     * @param $entityManager
     * @param string        $entityNamespace
     */
    public function __construct($entityManager, $entityNamespace)
    {
        $this->entityManager    = $entityManager;
        $this->entityRepository = $entityManager->getRepository($entityNamespace);
    }

    /**
     * {@inheritDoc}
     */
    public function save(ReadModelInterface $readModel)
    {
        $this->entityManager->persist($readModel);
        $this->entityManager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function find($uuid)
    {
        $result = $this->entityRepository->findBy(["gameId" => $uuid]);

        return end($result);
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $fields)
    {
        return $this->entityRepository->findBy($fields);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        return $this->entityRepository->findAll
();
    }

    /**
     * {@inheritDoc}
     */
    public function remove($id)
    {
        if (false == $readModel = $this->find($id)) {
            return false;
        }

        $this->entityManager->remove($readModel);
        $this->entityManager->flush();
    }

    /**
     * @param ReadModelInterface $readModel
     */
    private function removeReadModel(ReadModelInterface $readModel)
    {
        $this->entityManager->remove($readModel);
        $this->entityManager->flush();
    }

    /**
     * Remove all readModels
     */
    public function removeAll()
    {
        $readModels = $this->findAll();

        foreach ($readModels as $readModel) {
            $this->removeReadModel($readModel);
        }
    }
}