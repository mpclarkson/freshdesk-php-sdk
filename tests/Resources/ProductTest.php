<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\Product;
use Freshdesk\tests\TestCase;

/**
 * Product resource tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ProductTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Product::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
