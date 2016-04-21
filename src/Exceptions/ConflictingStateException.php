<?php
/**
 * Created by PhpStorm.
 * User: Matt
 */

namespace Freshdesk\Exceptions;

/**
 * Conflicting State Exception
 *
 * Thrown when the Freshdesk API returns a 409 code. The resource that is being created/updated is in an inconsistent
 * or conflicting state. For example, if you attempt to Create a Contact with an email that is already associated with 
 * an existing user, this code will be returned
 *
 * @package Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ConflictingStateException extends ApiException
{
    
}
