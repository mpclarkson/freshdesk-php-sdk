<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 415 code. Content type application/xml is not supported. 
 * Only application/json is supported.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class UnsupportedContentTypeException extends ApiException
{
    
}
