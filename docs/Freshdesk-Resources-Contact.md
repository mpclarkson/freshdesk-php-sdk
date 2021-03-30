Freshdesk\Resources\Contact
===============

Contact resource

Provides access to the contact resources


* Class name: Contact
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### fields

    array|null Freshdesk\Resources\Contact::fields(array|null $query)

List contact fields

The agent whose credentials (API key or username/password) are being used to make this API call should be
authorised to view the contact fields

* Visibility: **public**


#### Arguments
* $query **array|null**



### makeAgent

    array|null Freshdesk\Resources\Contact::makeAgent(integer $id, array|null $query)

Convert a contact into an agent

Note:
1. The contact must have an email address in order to be converted into an agent.
2. If your account has already reached the maximum number of agents, the API request will fail with HTTP error code 403
3. The agent whose credentials (API key, username and password) were used to make this API call should be authorised to convert a contact into an agent

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The agent id&lt;/p&gt;
* $query **array|null**



### all

    mixed Freshdesk\Resources\Contact::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### create

    array|null Freshdesk\Resources\Contact::create(array $data)

Create a resource

Create a resource with the supplied data

* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### view

    array|null Freshdesk\Resources\Contact::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Contact::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### restore

    array|null Freshdesk\Resources\Contact::restore(integer $id)

Restore a contact

Restore a soft deleted cotnact.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Contact::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;


