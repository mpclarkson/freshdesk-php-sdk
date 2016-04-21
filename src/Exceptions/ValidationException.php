<?php
/**
 * Created by PhpStorm.
 * User: Matt
 */
namespace Freshdesk\Exceptions;

/**
 * Validation Exception
 *
 * Thrown when the Freshdesk API returns a 400 code. This means the request body/query string is not in the correct
 * format. For example, the Create a ticket API requires the requester_id field to be sent as part of the request and
 * if it is missing, this status code is returned
 *
 * @package Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ValidationException extends ApiException
{
}
