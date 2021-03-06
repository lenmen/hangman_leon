<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new \Broadway\Bundle\BroadwayBundle\BroadwayBundle(),
            new \Simgroep\EventSourcing\EventSourcingBundle\SimgroepEventSourcingBundle(),
            new \HangmanBundle\HangmanBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle(),
            new \Spray\SerializerBundle\SpraySerializerBundle(),
            new \FOS\RestBundle\FOSRestBundle(),
            new \Bazinga\Bundle\FakerBundle\BazingaFakerBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
            $bundles[] = new \Liip\FunctionalTestBundle\LiipFunctionalTestBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        //$loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
