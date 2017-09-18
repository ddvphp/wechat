<?php
namespace DdvPhp\Wechat;

$libRootDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . '../../org';
include $libRootDir. DIRECTORY_SEPARATOR .'errCode.php';
include $libRootDir. DIRECTORY_SEPARATOR .'qywechat.class.php';
/**
 * Class Cors
 *
 * Wrapper around PHPMailer
 *
 * @package DdvPhp\Wechat\QyWechat
 */
class QyWechat extends \Wechat
{
    public static $libRootDir = null;
    public static function getErrText($err) {
        return ErrCode::getErrText($err);
    }
}
QyWechat::$libRootDir = $libRootDir;
