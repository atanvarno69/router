<?php
/**
 * @package   Atanvarno\Router
 * @author    atanvarno69 <https://github.com/atanvarno69>
 * @copyright 2017 atanvarno.com
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Atanvarno\Router\Exception;

/** SPL use block. */
use Exception;

/**
 * Atanvarno\Router\Exception\NotFoundException
 *
 * Thrown when a route could not be matched. The user SHOULD return a `404
 * Not Found` error response.
 *
 * @api
 */
class NotFoundException extends Exception implements RouterException
{

}
