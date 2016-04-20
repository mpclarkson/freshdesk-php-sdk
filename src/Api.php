<?php

namespace Freshdesk;

use Freshdesk\Exceptions\AccessDeniedException;
use Freshdesk\Exceptions\ApiException;
use Freshdesk\Exceptions\AuthenticationException;
use Freshdesk\Exceptions\ConflictingStateException;
use Freshdesk\Exceptions\MethodNotAllowedException;
use Freshdesk\Exceptions\NotFoundException;
use Freshdesk\Exceptions\RateLimitExceededException;
use Freshdesk\Exceptions\UnsupportedAcceptHeaderException;
use Freshdesk\Exceptions\UnsupportedContentTypeException;
use Freshdesk\Exceptions\ValidationException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class for interacting with the the Freshdesk Api (v2).
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class Api
{
    /**
     * Access the Agents component of the api
     *
     * @var AgentApi
     */
    public $agents;

    /**
     * Access the Companies component of the api
     *
     * @var CompanyApi
     */
    public $companies;

    /**
     * Access the Contacts component of the api
     *
     * @var ContactApi
     */
    public $contacts;

    /**
     * Access the Groups component of the api
     *
     * @var GroupApi
     */
    public $groups;

    /**
     * Access the Tickets component of the api
     *
     * @var TicketApi
     */
    public $tickets;

    /**
     * @internal
     * @var Client
     */
    protected $client;

    /**
     * @var
     */
    private $baseUrl;

    /**
     * Constructs a new api instance
     *
     * @param $apiKey
     * @param $domain
     * @throws Exceptions\InvalidConfigurationException
     */
    public function __construct($apiKey, $domain)
    {
        if (!isset($apiKey)) {
            throw new Exceptions\InvalidConfigurationException("API key is empty.");
        }

        if (!isset($domain)) {
            throw new Exceptions\InvalidConfigurationException("Domain is empty.");
        }

        $this->baseUrl = sprintf('https://%s.freshdesk.com/api/v2', $domain);

        $this->client = new Client([
                'defaults' => [
                    'auth' => [$apiKey, 'X']
                ]
            ]
        );

        $this->agents = new AgentApi($this);
        $this->companies = new CompanyApi($this);
        $this->contacts = new ContactApi($this);
        $this->groups = new GroupApi($this);
        $this->tickets = new TicketApi($this);
    }

    /**
     * Internal method for handling all requests
     *
     * @internal
     * @param $method
     * @param $endpoint
     * @param array|null $data
     * @param array|null $query
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     */
    public function request($method, $endpoint, array $data = null, array $query = null) {

        $options = ['json' => $data];

        if(isset($query)) {
            $options['query'] = $query;
        }

        $url = $this->baseUrl . $endpoint;

        try {
            switch($method) {
                case 'GET':
                    return $this->client->get($url, $options)->json();
                    break;
                case 'POST':
                    return $this->client->post($url, $options)->json();
                    break;
                case 'PUT':
                    return $this->client->put($url, $options)->json();
                    break;
                case 'DELETE':
                    return $this->client->delete($url, $options)->json();
                    break;
                default:
                    return null;
            }
        }
        catch (RequestException $e) {
            throw $this->handleException($e);
        }
    }

    /**
     * @param RequestException $e
     * @return AccessDeniedException|ApiException|AuthenticationException|ConflictingStateException|NotFoundException|
     * RateLimitExceededException|UnsupportedContentTypeException|ValidationException
     */
    private function handleException(RequestException $e)
    {
        switch($e->getResponse()->getStatusCode()) {
            case 400:
                return new ValidationException($e);
                break;
            case 401:
                return new AuthenticationException($e);
                break;
            case 403:
                return new AccessDeniedException($e);
                break;
            case 404:
                return new NotFoundException($e);
                break;
            case 405:
                return new MethodNotAllowedException($e);
                break;
            case 406:
                return new UnsupportedAcceptHeaderException($e);
                break;
            case 409:
                return new ConflictingStateException($e);
                break;
            case 415:
                return new UnsupportedContentTypeException($e);
                break;
            case 429:
                return new RateLimitExceededException($e);
                break;
            default:
                return new ApiException($e);
        }
    }

    /**
     * Method for generating endpoints
     *
     * @internal
     * @param null $id
     * @return string
     */
    public function createEndpoint($endPoint, $id = null)
    {
        return $id == null ? $endPoint : $endPoint.'/'.$id;
    }
}
