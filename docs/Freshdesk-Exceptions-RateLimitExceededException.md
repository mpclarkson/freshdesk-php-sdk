Freshdesk\Exceptions\RateLimitExceededException
===============

Rate Limit Exceeded

Thrown when a the Freshdesk API returns a 429 code. The API rate limit alloted for your Freshdesk domain has been
exhausted


* Class name: RateLimitExceededException
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



