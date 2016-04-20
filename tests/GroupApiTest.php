<?php
namespace Freshdesk\tests;

use Freshdesk\GroupApi;

/**
 * Agent Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class GroupApiTest extends TestCase
{
    public function setUp()
    {
        $this->api = new GroupApi($this->apiKey, $this->domain);
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
        ];
    }
}
