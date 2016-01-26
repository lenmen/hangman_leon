<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 25-1-16
 * Time: 9:40
 */

namespace Hangman\Bundle\Tests\ReadModel;


use Broadway\ReadModel\ReadModelInterface;
use Broadway\ReadModel\Testing\ReadModelTestCase;
use Broadway\UuidGenerator\Rfc4122\Version4Generator;
use Hangman\Bundle\Game\ReadModel\Game;

class GameTest extends ReadModelTestCase
{
    protected function createReadModel()
    {
        $generator = new Version4Generator();
        $uuid = $generator->generate();

        return new Game($uuid, "readmodel");
    }
}