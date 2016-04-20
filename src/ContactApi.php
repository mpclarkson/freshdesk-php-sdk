<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk;

use Freshdesk\Exceptions\AccessDeniedException;
use Freshdesk\Exceptions\ApiException;
use Freshdesk\Exceptions\ConflictingStateException;
use Freshdesk\Exceptions\MethodNotAllowedException;
use Freshdesk\Exceptions\NotFoundException;
use Freshdesk\Exceptions\RateLimitExceededException;
use Freshdesk\Exceptions\UnsupportedAcceptHeaderException;
use Freshdesk\Exceptions\UnsupportedContentTypeException;
use Freshdesk\Exceptions\ValidationException;

class ContactApi
{
    const ENDPOINT = '/contacts';

    /**
     * @var Api
     */
    private $api;

    /**
     * CompanyApi constructor.
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     *
     * Create a contact
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
        $this->api->request('POST', $this->endpoint(), $data);
    }

    /**
     *
     * Get a list of contacts
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
     * Get a contact by id
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
     * Update a contact
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
        $this->api->request('PUT', $this->endpoint($id), $data);
    }

    /**
     * Delete a contact
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
        $this->api->request('DELETE', $this->endpoint($id));
    }

    /**
     * List contact fields
     *
     * @param array|null $query
     * @return mixed|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws Exceptions\AuthenticationException
     * @throws NotFoundException
     */
    public function fields(array $query = null)
    {
        $this->api->request('GET', 'contact_fields', null, $query);
    }

    /**
     * Convert a contact into an agent
     *
     * @param array|null $query
     * @return mixed|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws Exceptions\AuthenticationException
     * @throws NotFoundException
     */
    public function makeAgent($id, array $query = null)
    {
        $end = $id . '/make_agent';

        $this->api->request('GET', $this->endpoint($end), null, $query);
    }

    private function endpoint($id = null)
    {
        return $this->api->createEndpoint(self::ENDPOINT, $id);
    }

}