Freshdesk\Resources\Agent
===============

Agent resource

This provides access to the agent resources


* Class name: Agent
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### current

    array|null Freshdesk\Resources\Agent::current(array|null $query)

Get the currently authenticated agent



* Visibility: **public**


#### Arguments
* $query **array|null**



### all

    mixed Freshdesk\Resources\Agent::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### create

    array|null Freshdesk\Resources\Agent::create(array $data)

Create a resource

Create a resource with the supplied data

* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### view

    array|null Freshdesk\Resources\Agent::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**


