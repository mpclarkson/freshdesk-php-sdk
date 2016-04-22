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

/**
 * Conversation resource
 *
 * This provides access to the agent resources
 *
 * @package Api\Resources
 */
class Conversation extends AbstractResource
{

    use UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     * @internal
     * @var string
     */
    protected $endpoint = '/conversations';

    /**
     * The ticket resource endpoint
     *
     * @var string
     * @internal
     */
    private $ticketsEndpoint = '/tickets';

    /**
     * Creates the ticket endpoint
     * @param string $id
     * @return string
     * @internal
     */
    protected function ticketsEndpoint($id = null)
    {
        return $id === null ? $this->ticketsEndpoint : $this->ticketsEndpoint . '/' . $id;
    }

    /**
     *
     * Reply to a ticket
     *
     * @api
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
    public function reply($id, array $data)
    {
        return $this->api()->request('POST', $this->ticketsEndpoint($id . '/reply'), $data);
    }

    /**
     *
     * Create a note for a ticket
     *
     * @api
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
    public function note($id, array $data)
    {
        return $this->api()->request('POST', $this->ticketsEndpoint($id . '/note'), $data);
    }
}
