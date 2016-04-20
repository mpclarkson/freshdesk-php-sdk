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
        $this->api = new ContactApi($this->apiKey, $this->domain);
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
