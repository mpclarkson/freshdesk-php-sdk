<?php
namespace Freshdesk\tests;
use Freshdesk\CompanyApi;


/**
 * Company Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CompanyApiTest extends TestCase
{
    public function setUp()
    {
        $this->api = new CompanyApi($this->apiKey, $this->domain);
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
        ];
    }
}
