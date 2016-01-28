<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 28-1-16
 * Time: 14:55
 */

namespace Hangman\Bundle\WebSocket;


use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use SplObjectStorage;

class GameStatusApplication implements MessageComponentInterface
{
    /**
     * @var SplObjectStorage
     */
    protected $clients;

    /**
     * MessageApplication constructor.
     */
    public function __construct()
    {
        $this->clients = new SplObjectStorage();
    }

    /**
     * @param ConnectionInterface $conn
     */
    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);

        echo "New Connection! ({$conn->resourceId})\n";
    }

    /**
     * @param ConnectionInterface $conn
     */
    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);

        echo "Connection closed! ({$conn->resourceId})\n";
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
     * @param ConnectionInterface $from
     * @param string $msg
     */
    public function onMessage(ConnectionInterface $from, $msg)
    {
        $numRecv = count($this->clients) - 1;

        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

}