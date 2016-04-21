<?php
/**
 * Created by PhpStorm.
 * User: Matt
 */

namespace Freshdesk\Exceptions;

use Exception;
use GuzzleHttp\Exception\RequestException;

/**
 * General Exception
 *
 * Thrown when the Freshdesk API returns an HTTP error code that isn't handled by other exceptions
 *
 * @package Exceptions
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ApiException extends Exception
{

    /**
     * @internal
     * @param RequestException $e
     * @return AccessDeniedException|ApiException|AuthenticationException|ConflictingStateException|
     * MethodNotAllowedException|NotFoundException|RateLimitExceededException|UnsupportedAcceptHeaderException|
     * UnsupportedContentTypeException|ValidationException
     */
    static function create(RequestException $e) {
        switch ($e->getResponse()->getStatusCode()) {
            case 400:
                return new ValidationException($e);
            case 401:
                return new AuthenticationException($e);
            case 403:
                return new AccessDeniedException($e);
            case 404:
                return new NotFoundException($e);
            case 405:
                return new MethodNotAllowedException($e);
            case 406:
                return new UnsupportedAcceptHeaderException($e);
            case 409:
                return new ConflictingStateException($e);
            case 415:
                return new UnsupportedContentTypeException($e);
            case 429:
                return new RateLimitExceededException($e);
            default:
                return new ApiException($e);
        }
    }

    /**
     * @var RequestException
     * @internal
     */
    private $exception;

    /**
     * Returns the Request Exception
     *
     * A Guzzle Request Exception is returned
     *
     * @return RequestException
     */
    public function getRequestException()
    {
        return $this->exception;
    }

    /**
     * Exception constructor
     *
     * Constructs a new exception.
     *
     * @param RequestException $e
     * @internal
     */
    public function __construct(RequestException $e)
    {
        $this->exception = $e;
        parent::__construct();
    }
}
