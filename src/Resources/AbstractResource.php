<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 8:20 AM
 */

namespace Freshdesk\Resources;

use Freshdesk\Api;

/**
 * Abstract Resource
 *
 * Abstract class which all resources inherit from
 *
 * @internal
 * @package Api\Resources
 */
abstract class AbstractResource
{

    /**
     * @var Api
     * @internal
     */
    private $api;

    /**
     * @var String
     * @internal
     */
    protected $endpoint;

    /**
     * Resource constructor
     *
     * Constructs a new resource
     *
     * @param Api $api
     * @internal
     *
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Creates the endpoint
     *
     * @param null $id The endpoint terminator
     * @return string
     * @internal
     *
     */
    protected function endpoint($id = null)
    {
        return $id === null ? $this->endpoint : $this->endpoint . '/' . $id;
    }

    /**
     * @return Api
     * @internal
     */
    protected function api()
    {
        return $this->api;
    }
}
