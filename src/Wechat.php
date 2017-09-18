<?php
namespace DdvPhp;

$libRootDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . '../org';
include $libRootDir. DIRECTORY_SEPARATOR .'errCode.php';
include $libRootDir. DIRECTORY_SEPARATOR .'wechat.class.php';
/**
 * Class Cors
 *
 * Wrapper around PHPMailer
 *
 * @package DdvPhp\Wechat
 */
class Wechat extends \Wechat
{
    public static $libRootDir = null;
    public static function getErrText($err) {
        return ErrCode::getErrText($err);
    }
}
Wechat::$libRootDir = $libRootDir;
