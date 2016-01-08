<?php
namespace HangmanBundle\Game\ReadModel\Doctrine;

use Broadway\ReadModel\ReadModelInterface;
use Broadway\ReadModel\RepositoryInterface;
use Doctrine\ORM\EntityManager;

class DoctrineRepository implements RepositoryInterface
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
     * @param EntityManager $entityManager
     * @param string        $entityNamespace
     */
    public function __construct(EntityManager $entityManager, $entityNamespace)
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
    public function find($id)
    {
        return $this->entityRepository->find($id);
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
        return $this->entityRepository->findAll();
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
}