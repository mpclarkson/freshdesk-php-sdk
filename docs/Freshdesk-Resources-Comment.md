Freshdesk\Resources\Comment
===============

Comment resource

This provides access to the comment resources


* Class name: Comment
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### create

    array|null Freshdesk\Resources\Comment::create(integer $id, array $data)

Create a topic for a forum



* Visibility: **public**


#### Arguments
* $id **integer**
* $data **array**



### all

    array|null Freshdesk\Resources\Comment::all(integer $id, array $query)

List comments in a topic



* Visibility: **public**


#### Arguments
* $id **integer**
* $query **array**



### view

    array|null Freshdesk\Resources\Comment::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Comment::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Comment::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;


