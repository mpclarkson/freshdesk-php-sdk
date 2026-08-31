<?php
/**
 * User: Max84 @Vaisonet
 * Date: 09/11/2022
 */

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Archived ticket resource
 *
 * Provides access to Archived ticket resources
 *
 * @package Api\Resources
 */
class ArchivedTicket extends Ticket
{

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/tickets/archived';
}
