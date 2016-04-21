Freshdesk\Resources\Category
===============

Forum category resource

This provides access to the forum category resources


* Class name: Category
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### all

    mixed Freshdesk\Resources\Category::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### create

    array|null Freshdesk\Resources\Category::create(array $data)

Create a resource

Create a resource with the supplied data

* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### view

    array|null Freshdesk\Resources\Category::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Category::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Category::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;


