Freshdesk\Resources\Company
===============

Company resource

This provides access to company resources


* Class name: Company
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### fields

    mixed|null Freshdesk\Resources\Company::fields(array|null $query)

List resource fields



* Visibility: **public**


#### Arguments
* $query **array|null**



### all

    mixed Freshdesk\Resources\Company::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### autocomplete

    mixed Freshdesk\Resources\Company::autocomplete(array|null $query)

List companies by filter.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### create

    array|null Freshdesk\Resources\Company::create(array $data)

Create a resource

Create a resource with the supplied data

* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### view

    array|null Freshdesk\Resources\Company::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Company::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Company::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;


