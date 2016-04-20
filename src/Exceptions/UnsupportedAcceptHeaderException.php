<?php
namespace Freshdesk\Exceptions;


/**
 * Thrown when a the Freshdesk API returns a 406 code. Only application/json and '*\/*' are supported.
 * When uploading files multipart/form-data is supported.
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class UnsupportedAcceptHeaderException extends ApiException
{
    
}
