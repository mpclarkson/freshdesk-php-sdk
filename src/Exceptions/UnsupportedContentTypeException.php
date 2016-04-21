<?php
/**
 * Created by PhpStorm.
 * User: Matt
 */
namespace Freshdesk\Exceptions;


/**
 * Unsupported Content Type Exception
 *
 * Thrown when the Freshdesk API returns a 415 code. Content type application/xml is not supported.
 * Only application/json is supported
 *
 * @package Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class UnsupportedContentTypeException extends ApiException
{
    
}
