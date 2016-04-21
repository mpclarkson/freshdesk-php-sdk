<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\Comment;
use Freshdesk\tests\TestCase;

/**
 * Topic resource tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CommentTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Comment::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
        ];
    }
}
