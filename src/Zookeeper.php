<?php

namespace Spool\Zookeeper;

use Spool\Zookeeper\Includes\ClientId;
use Spool\Zookeeper\Includes\Acl;
use Spool\Zookeeper\Includes\Stat;

class Zookeeper implements ZkInterface
{
    public function close(): void
    {

    }
    public function __construct(string $host, callable $watcher_cb = null, int $recv_timeout = 10000, ClientId &$clientid, $context = null)
    {

    }
    public function connect(string $host, callable $watcher_cb = null, int $recv_timeout = 10000, ClientId &$clientid, $context = null): bool
    {
        return true;
    }
    public function create(string $path, string $value, Acl $acl, int $flags = 0): string
    {
        return '';
    }
    public function delete(string $path, int $version = -1): bool
    {
        return true;
    }
    public function exists(string $path, callable $watcher_cb = null): bool
    {
        return true;
    }
    public function get(string $path, callable $watcher_cb = null, Stat &$stat = null, int $max_size = 0): string
    {
        return '';
    }
    public function getAcl(string $path): Acl
    {
        return new Acl;
    }
    public function getChildren(string $path, callable $watcher_cb = null): array
    {
        return [];
    }
    public function getClientId(): ClientId
    {
        return new ClientId;
    }
    public function getRecvTimeout(): int
    {
        return 0;
    }
    public function getState(): int
    {
        return 0;
    }
    public function set(string $path, string $value, int $version = -1, Stat $stat): bool
    {
        return true;
    }
    public function setAcl(string $path, int $version, Acl $acl): bool
    {
        return true;
    }
    public function setDebugLevel(int $logLevel): bool
    {
        return true;
    }
    public function setLogStream(resource $stream): bool
    {
        return true;
    }
    public function setWatcher(callable $watcher_cb) : bool
    {
        return true;
    }
}
