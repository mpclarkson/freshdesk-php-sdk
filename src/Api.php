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
use Freshdesk\Resources\Agent;
use Freshdesk\Resources\BusinessHour;
use Freshdesk\Resources\Category;
use Freshdesk\Resources\Comment;
use Freshdesk\Resources\Company;
use Freshdesk\Resources\Contact;
use Freshdesk\Resources\EmailConfig;
use Freshdesk\Resources\Forum;
use Freshdesk\Resources\Group;
use Freshdesk\Resources\Product;
use Freshdesk\Resources\SLAPolicy;
use Freshdesk\Resources\Ticket;
use Freshdesk\Resources\TimeEntry;
use Freshdesk\Resources\Topic;
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
     * Access Agent resources
     *
     * @var Agent
     */
    public $agents;

    /**
     * Access Company resources
     *
     * @var Company
     */
    public $companies;

    /**
     * Access Contact resources
     *
     * @var Contact
     */
    public $contacts;

    /**
     * Access Group resources
     *
     * @var Group
     */
    public $groups;

    /**
     * Access Ticket resources
     *
     * @var Ticket
     */
    public $tickets;

    /**
     * Access TimeEntry resources
     *
     * @var TimeEntry
     */
    public $timeEntries;

    /**
     * Access Category resources
     *
     * @var Category
     */
    public $categories;

    /**
     * Access Forum resources
     *
     * @var Forum
     */
    public $forums;

    /**
     * Access Topic resources
     *
     * @var Topic
     */
    public $topics;

    /**
     * Access Comment resources
     *
     * @var Comment
     */
    public $comments;

    //Admin

    /**
     * Access Email Config resources
     *
     * @var EmailConfig
     */
    public $emailConfigs;

    /**
     * Access Product resources
     *
     * @var Product
     */
    public $products;

    /**
     * Access Business Hours resources
     *
     * @var BusinessHour
     */
    public $businessHours;

    /**
     * Access SLA Policy resources
     *
     * @var SLAPolicy
     */
    public $slaPolicies;

    //Internal

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

        //People
        $this->agents = new Agent($this);
        $this->companies = new Company($this);
        $this->contacts = new Contact($this);
        $this->groups = new Group($this);

        //Tickets
        $this->tickets = new Ticket($this);
        $this->timeEntries = new TimeEntry($this);

        //Discussions
        $this->categories = new Category($this);
        $this->forums = new Forum($this);
        $this->topics = new Topic($this);
        $this->comments = new Comment($this);
        
        //Admin
        $this->products = new Product($this);
        $this->emailConfigs = new EmailConfig($this);
        $this->slaPolicies = new SLAPolicy($this);
        $this->businessHours = new BusinessHour($this);
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
    public function request($method, $endpoint, array $data = null, array $query = null)
    {

        $options = ['json' => $data];

        if (isset($query)) {
            $options['query'] = $query;
        }

        $url = $this->baseUrl . $endpoint;

        try {
            switch ($method) {
                case 'GET':
                    return $this->client->get($url, $options)->json();
                case 'POST':
                    return $this->client->post($url, $options)->json();
                case 'PUT':
                    return $this->client->put($url, $options)->json();
                case 'DELETE':
                    return $this->client->delete($url, $options)->json();
                default:
                    return null;
            }
        } catch (RequestException $e) {
            throw $this->handleException($e);
        }
    }

    /**
     * @param RequestException $e
     * @return AccessDeniedException|ApiException|AuthenticationException|ConflictingStateException|MethodNotAllowedException|NotFoundException|RateLimitExceededException|UnsupportedAcceptHeaderException|UnsupportedContentTypeException|ValidationException
     */
    private function handleException(RequestException $e)
    {
        switch ($e->getResponse()->getStatusCode()) {
            case 400:
                return new ValidationException($e);
            case 401:
                return new AuthenticationException($e);
            case 403:
                return new AccessDeniedException($e);
            case 404:
                return new NotFoundException($e);
            case 405:
                return new MethodNotAllowedException($e);
            case 406:
                return new UnsupportedAcceptHeaderException($e);
            case 409:
                return new ConflictingStateException($e);
            case 415:
                return new UnsupportedContentTypeException($e);
            case 429:
                return new RateLimitExceededException($e);
            default:
                return new ApiException($e);
        }
    }
}