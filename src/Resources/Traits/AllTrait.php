<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 9:10 AM
 */

namespace Freshdesk\Resources\Traits;

trait AllTrait
{

    /**
     * @param null $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     */
    abstract protected function api();

    /**
     * Get a list of all agents for the given query parameters eg $query = ['page' => 2]
     *
     * @param array|null $query
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
    public function all(array $query = null)
    {
        $this->api()->request('GET', $this->endpoint(), null, $query);
    }

}