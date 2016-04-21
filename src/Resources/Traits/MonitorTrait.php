<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 10:23 AM
 */

namespace Freshdesk\Resources\Traits;

trait MonitorTrait
{

    /**
     * @param string $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     */
    abstract protected function api();


    /**
     *
     * Monitor the resource for the given user
     *
     * @param int $userId
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
     *
     * Unmonitor a resource for the given user
     *
     * @param int $userId
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
     *
     * UnMonitor a forum for the given user
     *
     * @param int $userId
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