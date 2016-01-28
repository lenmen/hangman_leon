<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 28-1-16
 * Time: 10:01
 */

namespace Hangman\Bundle\WebSocket;


use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;

class GameStatusTopic implements TopicInterface
{
    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        $topic->broadcast(["msg" => $connection->resourceId . " has joined " . $topic->getId()]);
    }

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     */
    public function onUnSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        $topic->broadcast(["msg" => $connection->resourceId . " has left " . $topic->getId()]);
    }

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @param $event
     * @param array $exclude
     * @param array $eligible
     */
    public function onPublish(ConnectionInterface $connection, Topic $topic, WampRequest $request, $event, array $exclude, array $eligible)
    {

        $topic->broadcast([
            "msg" => $event
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "hangman.game_status";
    }

}