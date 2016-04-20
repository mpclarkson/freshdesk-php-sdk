<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 403 error code. This indicates that
 * the agent whose credentials were used in making this request was not authorized to perform this API call.
 * It could be that this API call requires admin level credentials or perhaps the Freshdesk portal doesn't have
 * corresponding feature enabled. It could also indicate that the user has reached the maximum number of failed login
 * attempts or that the account has reached the maximum number of agents
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class AccessDeniedException extends ApiException
{
}
