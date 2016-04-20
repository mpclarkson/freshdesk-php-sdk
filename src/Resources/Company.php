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
 * Class CompanyApi
 * @internal
 * @package Freshdesk
 */
class Company extends AbstractResource
{
    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/companies';

    /**
     *
     * Create a company
     *
     * @param array|null $data
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     */
    public function create(array $data)
    {
        return $this->api->request('POST', $this->endpoint(), $data);
    }

    /**
     *
     * Get a list of companies
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
        return $this->api->request('GET', $this->endpoint(), null, $query);
    }

    /**
     *
     * Get a company by id
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
        return $this->api->request('GET', $this->endpoint($id), null, $query);
    }

    /**
     * Update a company
     *
     * @param $id
     * @param array|null $data
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     */
    public function update($id, array $data = null)
    {
        return $this->api->request('PUT', $this->endpoint($id), $data);
    }

    /**
     * Delete a company
     *
     * @param $id
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     */
    public function delete($id)
    {
        return $this->api->request('DELETE', $this->endpoint($id));
    }

    /**
     * List company fields
     *
     * @param array|null $query
     * @return mixed|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws NotFoundException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     */
    public function fields(array $query = null)
    {
        return $this->api->request('GET', '/company_fields', null, $query);
    }

}