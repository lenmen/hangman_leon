<?php

namespace HangmanBundle;

use HangmanBundle\DependencyInjection\HangmanBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HangmanBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new HangmanBundleExtension();
    }
}
