<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:33
 */

namespace Hangman\Bundle\Services;

use Broadway\Serializer\SerializableInterface;

class LetterService implements SerializableInterface
{
    /**
     * @var array
     */
    private $data;
    /**
     * LetterService constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->data = $elements;
    }

    /**
     * @param int $key
     * @param string $letter
     * @return $this
     */
    public function addLetterWithKeyToContainer($key, $letter)
    {
        $this->data[$key] = $letter;
        return $this;
    }

    /**
     * @param string $val
     * @return $this
     */
    public function add($val)
    {
        $this->data[] = $val;
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $letter
     * @return bool
     */
    public function LetterExistsInContainer($letter)
    {
        return in_array($letter,$this->data);
    }

    /**
     * @return int
     */
    public function lengthOfContainer() {
        return count($this->data);
    }

    /**
     * @return string
     */
    public function convertArrayToString() {
        $lettersArray = $this->data;
        $letters = '';
        ksort($lettersArray);

        foreach ($lettersArray as $letter) {
            $letters .= $letter;
        }

        return $letters;

    }

    /**
     * @param array $data
     * @return LetterService
     */
    public static function deserialize(array $data)
    {
        return new self($data["values"]);
    }

    /**
     * @return array
     */
    public function serialize()
    {
        // Serialize all elemenets of Array Collection as an array
        $data = [
            "values" => $this->data
        ];

        return $data;
    }
}