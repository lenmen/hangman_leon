<?php
//
//namespace HangmanBundle\Tests;
//
//use Broadway\ReadModel\ReadModelInterface;
//use Broadway\ReadModel\Testing\ReadModelTestCase;
//use Broadway\UuidGenerator\Rfc4122\Version4Generator;
//use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\ORM\EntityManager;
//use Doctrine\ORM\EntityManagerInterface;
//use HangmanBundle\Game\ReadModel\Doctrine\DoctrineRepository;
//use HangmanBundle\Game\ReadModel\GameStatics;
//use Symfony\Component\Validator\Constraints\DateTime;
//
//
//class RepositoryTest extends ReadModelTestCase
//{
//    /** @var  DoctrineRepository */
//    private $repository;
//
//    /**
//     * @var Version4Generator
//     */
//    private  $uidGenerator;
//
//    /**
//     * @var EntityManager
//     */
//    private $entityManager;
//
//
//    public function setUp()
//    {
//        $this->repository = $this->getRepository();
//        $this->uidGenerator = new Version4Generator();
//    }
//
//    /**
//     * @test
//     */
//    public function it_saves_and_finds_read_models_by_id()
//    {
//        var_dump(gettype($this->repository));
//        var_dump($this->repository);
//        if ($this->repository === null) {
//            $this->assertTrue(false);
//        }
//        $dateTime = new \DateTime("now");
//        $uuid = $this->uidGenerator->generate();
//
//        $model = $this->createReadModel();
//        $model->setGameId($uuid);
//        $model->setGameStatus("In progress");
//        $model->setGameStartTime($dateTime);
//
////        $this->entityManager->beginTransaction();
////        $this->repository->save($model);
//
//        $this->assertEquals($model, $this->repository->find(1));
//
////        $this->entityManager->rollback();
////        $this->entityManager->flush();
////        $this->entityManager->close();
//    }
//
//    /**
//     * @return GameStatics
//     */
//    protected function createReadModel()
//    {
//        return new GameStatics();
//    }
//
//    public function testEnityManagerMock()
//    {
//        $this->entityManager->expects($this->once())
//            ->method("getRepository")
//            ->will($this->returnValue(GameStatics::class));
//    }
//
//    /**
//     * @return DoctrineRepository
//     */
//    private function getRepository()
//    {
////        $kernel = new \AppKernel('test', true);
////        $kernel->boot();
////
////        $container = $kernel->getContainer();
////       // $entityManager = $container->get('doctrine')->getManager();
////        //$this->entityManager = $entityManager;
//
//        $gameStatics = $this->getMockBuilder(GameStatics::class)->getMock();
//
//        $em = $this->getMockBuilder(ObjectManager::class)
//            ->disableOriginalConstructor()
//            ->getMock();
//
//        $em->expects($this->once())
//            ->method("getRepository")
//            ->will($this->returnValue($gameStatics));
//
////
//        $repo = new DoctrineRepository($em, 'HangmanBundle\Game\ReadModel\GameStatics');
//      //  var_dump($repo);
//
////        $kernel->shutdown();
//
//        return $repo;
//    }
//
//}