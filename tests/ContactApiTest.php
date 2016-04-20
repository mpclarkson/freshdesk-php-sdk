<?php
namespace Freshdesk\tests;

use Freshdesk\ContactApi;

/**
 * Contacts Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ContactApiTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->class = ContactApi::class;
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
            ['makeAgent'],
        ];
    }
}
