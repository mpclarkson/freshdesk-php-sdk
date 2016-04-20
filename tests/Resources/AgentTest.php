<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\tests\TestCase;
use Freshdesk\Resources\Agent;

/**
 * Agent resource tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class AgentTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->class = Agent::class;
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
