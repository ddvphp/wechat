<?php
namespace DdvPhp\Wechat;

include '../../org/errCode.php';
include '../../org/qywechat.class.php';
/**
 * Class Cors
 *
 * Wrapper around PHPMailer
 *
 * @package DdvPhp\Wechat
 */
class QyWechat extends \Wechat
{
    public static function getErrText($err) {
        return ErrCode::getErrText($err);
    }
}
