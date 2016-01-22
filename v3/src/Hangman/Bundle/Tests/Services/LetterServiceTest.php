<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 22-1-16
 * Time: 9:30
 */

namespace Hangman\Bundle\Tests\Services;


use Doctrine\ORM\EntityManager;
use FOS\RestBundle\Tests\Functional\WebTestCase;
use Hangman\Bundle\Services\LetterService;

class LetterServiceTest extends WebTestCase
{
    /**
     * @var LetterService
     */
    private $letterService;

    /**
     * Add the LetterSerivce to the property
     */
    public function setUp()
    {
        $this->letterService = new LetterService();

        parent::setUp();
    }

    /**
     * @test
     */
    public function it_can_add_letters_with_key_positions()
    {
        $key = 3;
        $letter = 'l';
        $expected = [$key => $letter];

        $this->letterService->addLetterWithKeyToContainer($key, $letter);

        // Check if the output matches
        $this->assertArrayHasKey($key, $this->letterService->toArray());
        $this->assertEquals($expected, $this->letterService->toArray());
    }

    /**
     * @test
     */
    public function letter_can_be_found_in_array_collection()
    {
        $this->letterService->addLetterWithKeyToContainer(1, 'l');

        $founded = $this->letterService->LetterExistsInContainer('l');

        $this->assertTrue($founded, "Letter found in Array");
    }

    /**
     * @test
     */
    public function letter_can_not_be_found_in_array_collection()
    {
        $this->letterService->addLetterWithKeyToContainer(1, 'l');
        $founded = $this->letterService->LetterExistsInContainer('p');

        $this->assertNotTrue($founded, "Letter is not in Array");
    }

    /**
     * @test
     */
    public function it_can_get_the_length_of_the_array_collection()
    {
        $this->letterService->addLetterWithKeyToContainer(1, 'l');
        $this->letterService->addLetterWithKeyToContainer(2, 'p');

        $size = $this->letterService->lengthOfContainer();

        $this->assertEquals(2, $size);
    }

    /**
     * @test
     */
    public function it_can_be_serialized_and_unserialized()
    {
        $this->letterService->addLetterWithKeyToContainer('test', 'lol');
        $serialized = (string) $this->letterService;

        $unserialize = $this->letterService->deserialize(unserialize($serialized));
        $succeed = false;

        if ($unserialize !== false) {
            $succeed = true;
        }

        $this->assertTrue($succeed);
    }

    /**
     * @test
     */
    public function it_can_convert_to_string()
    {
        $word = "test";

        $this->letterService->addLetterWithKeyToContainer(0, 't');
        $this->letterService->addLetterWithKeyToContainer(3, 's');
        $this->letterService->addLetterWithKeyToContainer(4, 't');
        $this->letterService->addLetterWithKeyToContainer(1, 'e');

        $converted = $this->letterService->convertArrayToString();

        $this->assertEquals($word, $converted);
    }

    public function tearDown()
    {
        unset($this->letterService);
    }

}