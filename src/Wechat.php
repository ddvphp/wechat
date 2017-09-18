<?php
namespace DdvPhp;

include '../org/errCode.php';
include '../org/wechat.class.php';
/**
 * Class Cors
 *
 * Wrapper around PHPMailer
 *
 * @package DdvPhp\Wechat
 */
class Wechat extends \Wechat
{
    public static function getErrText($err) {
        return ErrCode::getErrText($err);
    }
}
