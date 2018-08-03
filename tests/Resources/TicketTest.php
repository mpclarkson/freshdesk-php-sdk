<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\tests\TestCase;
use Freshdesk\Resources\Ticket;

/**
 * Ticket Api tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class TicketApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Ticket::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
            ['filter'],
            ['fields'],
            ['restore'],
            ['fields'],
            ['conversations'],
            ['timeEntries']
        ];
    }

}
