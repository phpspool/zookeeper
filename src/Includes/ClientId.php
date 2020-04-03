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
class ClientId
{
    /**
     * Undocumented variable
     *
     * @var [int]   int64T
     */
    public $client_id;
    /**
     * Undocumented variable
     *
     * @var [string]    chr[16]
     */
    public $passwd;
    /**
     * 初始化
     *
     * @param integer $client_id
     * @param string $passwd
     * @return array
     */
    public function __construct(int $client_id = 0, string $passwd = ''): array
    {
        $this->client_id = $client_id;
        $this->passwd = $passwd;
    }
    /**
     * Undocumented function
     *
     * @return string
     */
    public function __toString(): string
    {
        return '';
    }
    /**
     * Undocumented function
     *
     * @param string $ia
     * @return void
     */
    public function build(string $ia): void
    {
        
    }
}