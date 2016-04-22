<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 9:10 AM
 */

namespace Freshdesk\Resources\Traits;

/**
 * View Trait
 *
 * @package Freshdesk\Resources\Traits
 *
 */
trait ViewTrait
{
    /**
     * @param integer $end string
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
     * View a resource
     *
     * Use 'include' to embed additional details in the response. Each include will consume an additional credit.
     * For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
     * See Freshdesk's documentation for details.
     *
     * @api
     * @param int $id The resource id
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
        return $this->api()->request('GET', $this->endpoint($id), null, $query);
    }
}
