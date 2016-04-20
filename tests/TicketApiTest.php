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
        $this->api = new TicketApi($this->apiKey, $this->domain);
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
