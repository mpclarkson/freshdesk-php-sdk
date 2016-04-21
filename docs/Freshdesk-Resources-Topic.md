Freshdesk\Resources\Topic
===============

Topic Resource

Provides access to topic resources


* Class name: Topic
* Namespace: Freshdesk\Resources
* Parent class: [Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### create

    array|null Freshdesk\Resources\Topic::create(integer $id, array $data)

Create a topic for a forum



* Visibility: **public**


#### Arguments
* $id **integer**
* $data **array**



### all

    array|null Freshdesk\Resources\Topic::all(integer $id, array|null $query)

List topics in a forum



* Visibility: **public**


#### Arguments
* $id **integer**
* $query **array|null**



### view

    array|null Freshdesk\Resources\Topic::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\Topic::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\Topic::delete(\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;



### monitor

    array|null Freshdesk\Resources\Topic::monitor($id, $userId)

Monitor a resource

Monitor a resource for the given user

* Visibility: **public**


#### Arguments
* $id **mixed** - &lt;p&gt;The id of the resource&lt;/p&gt;
* $userId **mixed** - &lt;p&gt;The id of the user&lt;/p&gt;



### unmonitor

    array|null Freshdesk\Resources\Topic::unmonitor($id, $userId)

Unmonitor a resource

Unmonitor a resource for the given user

* Visibility: **public**


#### Arguments
* $id **mixed** - &lt;p&gt;The id of the resource&lt;/p&gt;
* $userId **mixed** - &lt;p&gt;The id of the user&lt;/p&gt;



### monitorStatus

    array|null Freshdesk\Resources\Topic::monitorStatus($id, $userId)

Monitor status

Get the monitoring status of the topic for the user

* Visibility: **public**


#### Arguments
* $id **mixed** - &lt;p&gt;The id of the resource&lt;/p&gt;
* $userId **mixed** - &lt;p&gt;The id of the user&lt;/p&gt;


