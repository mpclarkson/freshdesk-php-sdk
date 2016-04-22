<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\MonitorTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 *
 * Forum resource
 *
 * Provides access to the forum resources
 *
 * @package Api\Resources
 */
class Forum extends AbstractResource
{

    use AllTrait, ViewTrait, UpdateTrait, DeleteTrait, MonitorTrait;
    
    /**
     * The forums resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/discussions/forums';

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $categoryEndpoint = '/discussions/categories';

    /**
     * Creates the category endpoint (for creating forums)
     *
     * @param integer $id
     * @return string
     * @internal
     */
    private function categoryEndpoint($id = null)
    {
        return $id === null ? $this->categoryEndpoint : $this->categoryEndpoint . '/' . $id;
    }

    /**
     *
     * Create a forum for a category.
     *
     * @api
     * @param int $id The category Id
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
        return $this->api()->request('POST', $this->categoryEndpoint($id), $data);
    }
}
