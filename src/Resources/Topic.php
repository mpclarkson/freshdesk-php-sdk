<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\MonitorTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Topic resource
 *
 * @internal
 * @package Freshdesk\Resources
 */
class Topic extends AbstractResource
{

    use ViewTrait, UpdateTrait, DeleteTrait, MonitorTrait;

    /**
     * The topic resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/discussions/topics';

    /**
     * The forums resource endpoint
     *
     * @var string
     */
    private $forumsEndpoint = '/discussions/forums';

    /**
     * Creates the forums endpoint
     * @param string $id
     * @return string
     */
    protected function forumsEndpoint($id = null)
    {
        return $id == null ? $this->forumsEndpoint : $this->forumsEndpoint . '/' . $id;
    }

    /**
     *
     * Create a topic for a forum
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
        return $this->api()->request('POST', $this->forumsEndpoint($id . '/topics'), $data);
    }

    /**
     *
     * List topics in a forum
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
        return $this->api()->request('GET', $this->forumsEndpoint($id . '/topics'), null, $query);
    }

}
