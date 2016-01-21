<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 15-1-16
 * Time: 14:46
 */

namespace HangmanBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testGetGame()
    {
        $client = static::makeClient();
        $crawler = $client->request('get', '/games/0');

        $data = [
            "statusCode" => 0,
            "statusMessage" => "Game found"
        ];

        //$this->assertStatusCode(200, $client);
        $this->assertJson(json_encode($data, true));
    }

//    public function testCanCreateGame
}