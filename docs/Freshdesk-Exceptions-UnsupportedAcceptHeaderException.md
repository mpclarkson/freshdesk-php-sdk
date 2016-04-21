Freshdesk\Exceptions\UnsupportedAcceptHeaderException
===============

Unsupported Accept Header Exception

Thrown when the Freshdesk API returns a 406 code. Only application/json and '*\/*' are supported.
When uploading files multipart/form-data is supported


* Class name: UnsupportedAcceptHeaderException
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



