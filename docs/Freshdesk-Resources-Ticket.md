Freshdesk\Resources\Ticket
===============

Ticket resource

Provides access to ticket resources


* Class name: Ticket
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)





Properties
----------


### $endpoint

    protected string $endpoint = '/tickets'

The resource endpoint



* Visibility: **protected**


Methods
-------


### restore

    mixed|null Freshdesk\Resources\Ticket::restore($id)

Restore a ticket

Restores a previously deleted ticket

* Visibility: **public**


#### Arguments
* $id **mixed**



### fields

    mixed|null Freshdesk\Resources\Ticket::fields(array|null $query)

List ticket fields

The agent whose credentials (API key or username/password) are being used to make this API call should be
authorised to view the ticket fields

* Visibility: **public**


#### Arguments
* $query **array|null**



### conversations

    mixed|null Freshdesk\Resources\Ticket::conversations(integer $id, array|null $query)

List conversations associated with a ticket



* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The ticket id&lt;/p&gt;
* $query **array|null**



### timeEntries

    mixed|null Freshdesk\Resources\Ticket::timeEntries(integer $id, array|null $query)

List time entries associated with a ticket



* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The ticket id&lt;/p&gt;
* $query **array|null**



### all

    mixed Freshdesk\Resources\Ticket::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### create

    array|null Freshdesk\Resources\Ticket::create(array $data)

Create a resource

Create a resource with the supplied data

* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### view

    array|null Freshdesk\Resources\Ticket::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Ticket::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Ticket::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;


