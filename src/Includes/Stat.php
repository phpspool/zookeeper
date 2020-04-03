<?php
/**
 * 强类型检测启用
 */
declare(strict_types = 1);
/**
 * @auther 陈浩波
 */
namespace Spool\Zookeeper\Includes;
/**
 * 
 */
class Stat
{
    /**
    * @var int  int64_t
    */
    public $czxid;
    /**
    * @var int  int64_t
    */
    public $mzxid;
    /**
    * @var int  int64_t
    */
    public $ctime;
    /**
    * @var int  int64_t
    */
    public $mtime;
    /**
    * @var int  int32_t
    */
    public $version;
    /**
    * @var int  int32_t
    */
    public $cversion;
    /**
    * @var int  int32_t
    */
    public $aversion;
    /**
    * @var int  int64_t
    */
    public $ephemeralOwner;
    /**
    * @var int  int32_t
    */
    public $dataLength;
    /**
    * @var int  int32_t
    */
    public $numChildren;
    /**
    * @var int  int64_t
    */
    public $pzxid;
}