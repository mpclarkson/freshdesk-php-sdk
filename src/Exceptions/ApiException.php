<?php
namespace Freshdesk\Exceptions;

use Exception;
use GuzzleHttp\Exception\RequestException;

/**
 * ApiException exception is thrown when a the Freshdesk API returns an HTTP error code
 *
 * @package Freshdesk
 * @category Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ApiException extends Exception
{

    /**
     * @var RequestException
     */
    private $exception;

    /**
     * @return RequestException
     */
    public function getRequestException()
    {
        return $this->exception;
    }

    public function __construct(RequestException $e)
    {
        $this->exception = $e;
        parent::__construct();
    }
}
