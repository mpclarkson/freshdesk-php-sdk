<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;

use Freshdesk\Exceptions\AccessDeniedException;
use Freshdesk\Exceptions\ApiException;
use Freshdesk\Exceptions\ConflictingStateException;
use Freshdesk\Exceptions\MethodNotAllowedException;
use Freshdesk\Exceptions\NotFoundException;
use Freshdesk\Exceptions\RateLimitExceededException;
use Freshdesk\Exceptions\UnsupportedAcceptHeaderException;
use Freshdesk\Exceptions\UnsupportedContentTypeException;
use Freshdesk\Exceptions\ValidationException;

/**
 * Agent resources
 *
 * @package Freshdesk\Resources
 */
class Agent extends AbstractResource
{

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/agents';

    /**
     *
     * Get a list of all agents
     *
     * @param array|null $query
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     */
    public function all(array $query = null)
    {
        $this->api->request('GET', $this->endpoint(), null, $query);
    }

    /**
     *
     * Get an agent by id
     *
     * @param int $id
     * @param array|null $query
     * @return array|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @throws RateLimitExceededException
     * @throws UnsupportedAcceptHeaderException
     * @throws UnsupportedContentTypeException
     * @throws ValidationException
     */
    public function view($id, array $query = null)
    {
        $this->api->request('GET', $this->endpoint($id), null, $query);
    }

    /**
     *
     * Get the currently authenticated agent
     *
     * @param array|null $query
     * @return array|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @throws RateLimitExceededException
     * @throws UnsupportedAcceptHeaderException
     * @throws UnsupportedContentTypeException
     * @throws ValidationException
     */
    public function current(array $query = null)
    {
        $this->api->request('GET', $this->endpoint('me'), null, $query);
    }

}