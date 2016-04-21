<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * TimeEntry resource
 *
 * @internal
 * @package Freshdesk\Resources
 */
class TimeEntry extends AbstractResource
{

    use ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The time entries resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/time_entries';

    /**
     * The tickets resource endpoint
     *
     * @var string
     */
    private $ticketsEndpoint = '/tickets';

    /**
     * Creates the forums endpoint
     * @param null $id
     * @return string
     */
    protected function ticketsEndpoint($id = null)
    {
        return $id == null ? $this->ticketsEndpoint : $this->ticketsEndpoint . '/' . $id;
    }

    /**
     *
     * Create a time entry for a ticket
     *
     * @param int $id
     * @param array $data
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function create($id, array $data)
    {
        return $this->api()->request('POST', $this->ticketsEndpoint($id . '/time_entries'), $data);
    }

    /**
     *
     * List time entries for a ticket
     *
     * @param int $id
     * @param array|null $query
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function all($id, array $query = null)
    {
        return $this->api()->request('GET', $this->ticketsEndpoint($id . '/time_entries'), null, $query);
    }

    /**
     *
     * Start / stop the timer
     *
     * @param int $id
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function toggle($id)
    {
        return $this->api()->request('PUT', $this->endpoint($id));
    }

}
