<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/10/16
 * Time: 2:43 PM
 */

namespace Dice\Interop\Exception;


class NotFoundException extends \InvalidArgumentException implements \Interop\Container\Exception\NotFoundException
{

}