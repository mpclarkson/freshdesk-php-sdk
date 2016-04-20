<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 9:10 AM
 */

namespace Freshdesk\Resources\Traits;

trait ViewTrait
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
     *
     * Get a resource by $id. Accepts an optional array of query parameters.
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
    public function view($id, array $query = null)
    {
        $this->api()->request('GET', $this->endpoint($id), null, $query);
    }

}