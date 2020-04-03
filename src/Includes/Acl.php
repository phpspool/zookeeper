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
class Acl
{
    /**
     * Undocumented variable
     *
     * @var [int]   int32T
     */
    public $perms;
    /**
     * Undocumented variable
     *
     * @var [string]
     */
    public $scheme;
    /**
     * Undocumented variable
     *
     * @var [string]
     */
    public $id;
}