<?php
namespace Freshdesk\tests;

use Freshdesk\AgentApi;

/**
 * Agent Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class AgentApiTest extends TestCase
{
    public function setUp()
    {
        $this->api = new AgentApi($this->apiKey, $this->domain);
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
            ['current'],
        ];
    }
}
