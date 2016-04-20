<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 405 code. This API request used the wrong HTTP verb/method.
 * For example an API PUT request on /api/v2/tickets endpoint will return a HTTP 405 as /api/v2/tickets allows
 * only GET and POST requests.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class MethodNotAllowedException extends ApiException
{
    
}
