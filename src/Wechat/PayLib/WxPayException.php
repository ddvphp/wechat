<?php
namespace DdvPhp\Wechat\PayLib;
use \DdvPhp\DdvException;

/**
 * 
 * 微信支付API异常类
 * @author widyhu
 *
 */
class WxPayException extends DdvException {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
