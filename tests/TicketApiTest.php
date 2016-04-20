<?php
namespace Freshdesk\tests;

use Freshdesk\TicketApi;

/**
 * Ticket Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class TicketApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = TicketApi::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
            ['fields'],
            ['restore'],
            ['fields'],
            ['conversations'],
            ['timeEntries'],
        ];
    }

}
