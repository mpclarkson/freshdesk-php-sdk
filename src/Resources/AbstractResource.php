<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 21/04/2016
 * Time: 8:20 AM
 */

namespace Freshdesk\Resources;


use Freshdesk\Api;

abstract class AbstractResource
{

    /**
     * @var Api
     */
    private $api;

    /**
     * @var String
     */
    protected $endpoint;

    /**
     * CompanyApi constructor.
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Creates the endpoint
     * @param null $id
     * @return string
     */
    protected function endpoint($id = null)
    {
        return $id == null ? $this->endpoint : $this->endpoint . '/' . $id;
    }

    /**
     * @return Api
     */
    protected function api()
    {
        return $this->api;
    }
}