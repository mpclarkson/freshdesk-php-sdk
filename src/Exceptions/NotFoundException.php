<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 404 code. This is returned when the request contains invalid
 * ID/Freshdesk domain in the URL or an invalid URL itself. For example, an API call to retrieve a ticket with an
 * invalid ID will return a HTTP 404 status code to let you know that no such ticket exists.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class NotFoundException extends ApiException
{
    
}
