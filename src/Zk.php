<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Spool\Zookeeper;

use Swoole\Coroutine\Client;

/**
 * Description of Zk
 *
 * @author 陈浩波
 */
class Zk {
    /**
     * Swoole 协程客户端
     * @var Client
     */
    protected $fd;
    
    public function __construct() 
    {
        $this->fd = new \Co\Client(SWOOLE_SOCK_TCP);
        $settings = [
            'open_length_check'     => 1,   //打开长度检测
            'package_length_type'   => 'N', //长度数据类型
            'package_length_offset' => 0, //第N个字节是包长度的值
            'package_body_offset'   => 4, //第几个字节开始计算长度
            'package_max_length'    => 2000000, //协议最大长度
        ];
        $this->fd->set($settings);
    }
    
    public function on_connect() {
        
        $data = pack("N", 44);
        $fd->send($data);
        $data = pack("NJNJN", 0, 0, 30000, 0, 16);
        for($i = 0; $i < 16; $i++){
            $data .= isset($this->passwd[$i]) ? ord($this->passwd[$i]) : chr(0);
        }
        echo "Client send connect: ";
        var_dump($data);
        $fd->send($data);
        Timer::after(self::$send_to, [$this, "send_ping"]);
        $this->send_set_watches();
        $this->send_auth_info();
        $this->input_buffer = '';
        $this->is_connected = TRUE;
    }
}
