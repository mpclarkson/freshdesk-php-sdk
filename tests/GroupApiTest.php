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
        parent::setUp();

        $this->class = GroupApi::class;
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
