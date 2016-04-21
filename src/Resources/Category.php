<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;
use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Forum category resource
 *
 * @internal
 * @package Freshdesk\Resources
 */
class Category extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/discussions/categories';

}
