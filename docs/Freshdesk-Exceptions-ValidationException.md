Freshdesk\Exceptions\ValidationException
===============

Validation Exception

Thrown when the Freshdesk API returns a 400 code. This means the request body/query string is not in the correct
format. For example, the Create a ticket API requires the requester_id field to be sent as part of the request and
if it is missing, this status code is returned


* Class name: ValidationException
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



