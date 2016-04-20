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
        parent::setUp();

        $this->class = CompanyApi::class;
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
