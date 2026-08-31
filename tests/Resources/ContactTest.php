<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\tests\TestCase;
use Freshdesk\Resources\Contact;

/**
 * Contacts Api tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ContactApiTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->class = Contact::class;
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
            ['makeAgent'],
        ];
    }
}
