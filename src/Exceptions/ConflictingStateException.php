<?php
namespace Freshdesk\Exceptions;

/**
 * Thrown when a the Freshdesk API returns a 409 code. The resource that is being created/updated is in an inconsistent 
 * or conflicting state. For example, if you attempt to Create a Contact with an email that is already associated with 
 * an existing user, this code will be returned.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ConflictingStateException extends ApiException
{
    
}
