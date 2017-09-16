<?php
namespace DdvPhp\Wechat;

class Exception extends \DdvPhp\DdvException\Error
{
  // 魔术方法
  public function __construct( $message = 'Wechat Error', $code = '400', $errorId = 'WECHAT_ERROR' , $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}
