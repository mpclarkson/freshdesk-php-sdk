Freshdesk\Exceptions\ConflictingStateException
===============

Conflicting State Exception

Thrown when the Freshdesk API returns a 409 code. The resource that is being created/updated is in an inconsistent
or conflicting state. For example, if you attempt to Create a Contact with an email that is already associated with
an existing user, this code will be returned


* Class name: ConflictingStateException
* Namespace: Freshdesk\Exceptions
* Parent class: [Freshdesk\Exceptions\ApiException](Freshdesk-Exceptions-ApiException.md)







Methods
-------


### getRequestException

    \GuzzleHttp\Exception\RequestException Freshdesk\Exceptions\ApiException::getRequestException()

Returns the Request Exception

A Guzzle Request Exception is returned

* Visibility: **public**
* This method is defined by [Freshdesk\Exceptions\ApiException](Freshdesk-Exceptions-ApiException.md)



