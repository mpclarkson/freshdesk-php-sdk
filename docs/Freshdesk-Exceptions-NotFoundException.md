Freshdesk\Exceptions\NotFoundException
===============

Not Found Exception

Thrown when the Freshdesk API returns a 404 code. This is returned when the request contains invalid
ID/Freshdesk domain in the URL or an invalid URL itself. For example, an API call to retrieve a ticket with an
invalid ID will return a HTTP 404 status code to let you know that no such ticket exists


* Class name: NotFoundException
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



