<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 400 code. This means the request body/query string is not in the correct
 * format. For example, the Create a ticket API requires the requester_id field to be sent as part of the request and
 * if it is missing, this status code is returned.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ValidationException extends ApiException
{
}
