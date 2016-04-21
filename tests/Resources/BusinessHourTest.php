<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\BusinessHour;
use Freshdesk\tests\TestCase;

/**
 * Business Hour resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class BusinessHourTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = BusinessHour::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
