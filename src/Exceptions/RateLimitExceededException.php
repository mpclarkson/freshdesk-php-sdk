<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 429 code. The API rate limit alloted for your Freshdesk domain has been
 * exhausted.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class RateLimitExceededException extends ApiException
{
    
}
