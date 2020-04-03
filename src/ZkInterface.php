<?php
/**
 * 强类型检测启用
 */
declare(strict_types = 1);
/**
 * @auther 陈浩波
 */
namespace Spool\Zookeeper;

use Spool\Zookeeper\Includes\ClientId;
use Spool\Zookeeper\Includes\Acl;
use Spool\Zookeeper\Includes\Stat;
/**
 * Zookeeper接口
 */
interface ZkInterface
{
    /* 常量 */
    const PERM_READ = 1;
    const PERM_WRITE = 2;
    const PERM_CREATE = 4;
    const PERM_DELETE = 8;
    const PERM_ADMIN = 16;
    const PERM_ALL = 31;
    const EPHEMERAL = 1;
    const SEQUENCE = 2;
    const LOG_LEVEL_ERROR = 1;
    const LOG_LEVEL_WARN = 2;
    const LOG_LEVEL_INFO = 3;
    const LOG_LEVEL_DEBUG = 4;
    const EXPIRED_SESSION_STATE = -112;
    const AUTH_FAILED_STATE = -113;
    const CONNECTING_STATE = 1;
    const ASSOCIATING_STATE = 2;
    const CONNECTED_STATE = 3;
    const READONLY_STATE = 5;
    const NOTCONNECTED_STATE = 999;
    const CREATED_EVENT = 1;
    const DELETED_EVENT = 2;
    const CHANGED_EVENT = 3;
    const CHILD_EVENT = 4;
    const SESSION_EVENT = -1;
    const NOTWATCHING_EVENT = -2;
    const SYSTEMERROR = -1;
    const RUNTIMEINCONSISTENCY = -2;
    const DATAINCONSISTENCY = -3;
    const CONNECTIONLOSS = -4;
    const MARSHALLINGERROR = -5;
    const UNIMPLEMENTED = -6;
    const OPERATIONTIMEOUT = -7;
    const BADARGUMENTS = -8;
    const INVALIDSTATE = -9;
    const NEWCONFIGNOQUORUM = -13;
    const RECONFIGINPROGRESS = -14;
    const OK = 0;
    const APIERROR = -100;
    const NONODE = -101;
    const NOAUTH = -102;
    const BADVERSION = -103;
    const NOCHILDRENFOREPHEMERALS = -108;
    const NODEEXISTS = -110;
    const NOTEMPTY = -111;
    const SESSIONEXPIRED = -112;
    const INVALIDCALLBACK = -113;
    const INVALIDACL = -114;
    const AUTHFAILED = -115;
    const CLOSING = -116;
    const NOTHING = -117;
    const SESSIONMOVED = -118;
    const NOTREADONLY = -119;
    const EPHEMERALONLOCALSESSION = -120;
    const NOWATCHER = -121;
    const RECONFIGDISABLED = -122;
    public function close(): void;
    public function __construct(string $host, callable $watcher_cb = null, int $recv_timeout = 10000, ClientId &$clientid, $context = null);
    public function connect(string $host, callable $watcher_cb = null, int $recv_timeout = 10000, ClientId &$clientid, $context = null): bool;
    public function create(string $path, string $value, Acl $acl, int $flags = 0): string;
    public function delete(string $path, int $version = -1): bool;
    public function exists(string $path, callable $watcher_cb = null): bool;
    public function get(string $path, callable $watcher_cb = null, Stat &$stat = null, int $max_size = 0): string;
    public function getAcl(string $path): Acl;
    public function getChildren(string $path, callable $watcher_cb = null): array;
    public function getClientId(): ClientId;
    // public function getConfig();
    public function getRecvTimeout(): int;
    public function getState(): int;
    // public function isRecoverable(): bool;
    public function set(string $path, string $value, int $version = -1, Stat $stat): bool;
    public function setAcl(string $path, int $version, Acl $acl): bool;
    public function setDebugLevel(int $logLevel): bool;
    // public function setDecisionConnOrder(bool $YesOrNo): bool;
    public function setLogStream(resource $stream): bool;
    public function setWatcher(callable $watcher_cb) : bool;
}