<?php

namespace YS\app;
class Config{
	static function db(){
		$db = require 'db.php';
		return $db;
	}

	static function systemInfo()
	{
		return [
			'version' => 'v1.4',
		];
	}

    public function getMailTpl(){
        return array(
            '卡密发送','管理员通知'
        );
    }



}
?>
