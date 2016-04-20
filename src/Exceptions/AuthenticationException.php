<?php
namespace Freshdesk\Exceptions;

/**
 * Thrown when a the Freshdesk API returns a 401 error
 * which indicates that the Authorization header is either missing or incorrect.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class AuthenticationException extends ApiException
{
}
