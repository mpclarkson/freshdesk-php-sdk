Freshdesk\Exceptions\MethodNotAllowedException
===============

Method Not Allowed Exception

Thrown when the Freshdesk API returns a 405 code. This API request used the wrong HTTP verb/method.
For example an API PUT request on /api/v2/tickets endpoint will return a HTTP 405 as /api/v2/tickets allows
only GET and POST requests


* Class name: MethodNotAllowedException
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



