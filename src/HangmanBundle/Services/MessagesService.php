<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 18-1-16
 * Time: 14:51
 */

namespace HangmanBundle\Services;


class MessagesService
{

    /**
     * @param int $code
     * @param string $value
     */
    public function setStatusMsg($code, $value)
    {
        $arr = [
            "statusCode" => $code,
            "statusMessage" => $value
        ];

        return $arr;
    }
}