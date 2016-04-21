<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\SLAPolicy;
use Freshdesk\tests\TestCase;

/**
 * SLA Policy resource tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SLAPolicytest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = SLAPolicy::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
