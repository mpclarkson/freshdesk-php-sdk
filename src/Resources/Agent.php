<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Agent resources
 *
 * @internal
 * @package Freshdesk\Resources
 */
class Agent extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/agents';

    /**
     *
     * Get the currently authenticated agent
     *
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
    public function current(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint('me'), null, $query);
    }

}