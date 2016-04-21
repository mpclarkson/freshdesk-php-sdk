<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\tests\TestCase;
use Freshdesk\Resources\Group;

/**
 * Agent Api tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class GroupApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Group::class;
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
