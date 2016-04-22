<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 10:23 AM
 */

namespace Freshdesk\Resources\Traits;

/**
 * Monitor Trait
 *
 * @package Freshdesk\Resources\Traits
 */
trait MonitorTrait
{

    /**
     * @param string $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     * @internal
     */
    abstract protected function api();

    /**
     * Monitor a resource
     *
     * Monitor a resource for the given user
     *
     * @api
     * @param $id The id of the resource
     * @param $userId The id of the user
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
    public function monitor($id, $userId)
    {
        $data = [
            'user_id' => $userId
        ];

        return $this->api()->request('POST', $this->endpoint($id . '/follow'), $data);
    }

    /**
     * Unmonitor a resource
     *
     * Unmonitor a resource for the given user
     *
     * @api
     * @param $id The id of the resource
     * @param $userId The id of the user
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
    public function unmonitor($id, $userId)
    {
        $query = [
            'user_id' => $userId
        ];

        return $this->api()->request('POST', $this->endpoint($id . '/follow'), null, $query);
    }

    /**
     * Monitor status
     *
     * Get the monitoring status of the topic for the user
     *
     * @api
     * @param $id The id of the resource
     * @param $userId The id of the user
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
    public function monitorStatus($id, $userId)
    {
        $query = [
            'user_id' => $userId
        ];

        return $this->api()->request('GET', $this->endpoint($id . '/follow'), null, $query);
    }
}
