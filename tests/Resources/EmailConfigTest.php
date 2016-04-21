<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\EmailConfig;
use Freshdesk\tests\TestCase;

/**
 * Email Config resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class EmailConfigTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = EmailConfig::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
