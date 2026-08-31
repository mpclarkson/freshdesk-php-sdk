<?php

namespace Freshdesk\Resources\Traits;

/**
 * Create Trait
 *
 * @package Freshdesk\Resources\Traits
 */
trait FilterTrait
{

    /**
     * @param null $end string
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
     * Filter a resource
     *
     * Filter a resource by $query
     * Make sure to pass a valid $query string
     *
     * @api
     * @param string $query
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
    public function filter(string $query)
    {
        $end = '/search'.$this->endpoint();
        $query = [
            'query' => '"'.$query.'"',
        ];
        return $this->api()->request('GET', $end, null, $query);
    }
}
