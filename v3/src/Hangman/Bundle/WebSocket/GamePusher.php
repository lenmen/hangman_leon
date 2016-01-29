<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 29-1-16
 * Time: 15:27
 */

namespace Hangman\Bundle\WebSocket;

use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Ratchet\Wamp\WampServerInterface;
use SplObjectStorage;

class GamePusher implements WampServerInterface
{
    /**
     * @var array
     */
    protected $subscribedTopics = [];

    /**
     * @var SplObjectStorage
     */
    protected $clients;

    /**
     * GamePusher constructor.
     */
    public function __construct()
    {
        $this->clients = new SplObjectStorage();
    }

    /**
     * @param $gameStatistics
     */
    public function onGameCreate($gameStatistics) {
        // Export object to array
        $data = json_decode($gameStatistics, true);

        if (!array_key_exists($data['gameId'], $this->subscribedTopics)) {
            return;
        }

        $topic = $this->subscribedTopics[$data["gameId"]];
        $topic->broadcast($data);
    }

    /**
     * @param ConnectionInterface $conn
     */
    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
    }

    /**
     * @param ConnectionInterface $conn
     */
    public function onClose(ConnectionInterface $conn)
    {
       $this->clients->detach($conn);
    }

    /**
     * @param ConnectionInterface $conn
     * @param \Exception $e
     */
    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occured: ({$e->getMessage()})\n";
        $conn->close();
    }

    /**
     * @param ConnectionInterface $conn
     * @param string $id
     * @param Topic|string $topic
     * @param array $params
     */
    public function onCall(ConnectionInterface $conn, $id, $topic, array $params)
    {
        $conn->callError($id, $topic, 'You are not allowed to make calls')->close();
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     */
    public function onSubscribe(ConnectionInterface $conn, $topic)
    {
        $this->subscribedTopics[$topic->getId()] = $topic;
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     */
    public function onUnSubscribe(ConnectionInterface $conn, $topic)
    {
        unset($this->subscribedTopics[$topic->getId()]);
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     * @param string $event
     * @param array $exclude
     * @param array $eligible
     */
    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible)
    {
        $conn->close();
    }
}