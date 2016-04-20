Freshdesk PHP SDK API v2 
===========================

[![Build Status](https://travis-ci.org/mpclarkson/freshdesk-php-sdk.svg?branch=master)](https://travis-ci.org/mpclarkson/freshdesk-php-sdk)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mpclarkson/freshdesk-php-sdk/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mpclarkson/freshdesk-php-sdk/?branch=master)

This is a PHP SDK for the [Freshdesk](https://www.freshdesk.com) API v2.

If you have questions, please contact me or open issue on GitHub.

Quick Start
-----------
```php
require __DIR__ . '/vendor/autoload.php';
use \Freshdesk\Api;

$api = new Api("your_freshdesk_api_key", "your_freshdesk_domain");

$all = $api->tickets->all(); //List tickets (page 1)
$some = $api->tickets->all(['page' => 2]); //List all tickets (page 2)
$new = $api->tickets->create($data); //Create a new ticket
$updated = $api->tickets->update($data); //Update a ticket
$api->tickets->delete($id); //Delete a ticket
$existing = $api->tickets->view($id); //View a ticket

//Responses are simple arrays, e.g.:
$id = $existing['id'];
$first = $all[0];

```

Installation
------------
To integrate this library into your application, use [Composer](https://getcomposer.org).

Add `mpclarkson/freshdesk-php-sdk` to your **composer.json** file:

```json
{
    "require": {
        "mpclarkson/freshdesk-php-sdk": "dev-master"
    }
}

```

Then run:

```bash
php composer.phar install
```

To Do
-----

This is a work in progress and PRs are welcome.


So far the following have been implemented:

- [x] Tickets (100%)
    - Create
    - View
    - List all
    - Update
    - Delete
    - Restore
    - List all ticket fields
    - List all conversations
    - List all time entries

- [x] Contacts (100%)
    - Create
    - View
    - List all
    - Update
    - Delete
    - Make agent
    - List all contact fields

- [x] Agents (100%)
    - View
    - List all
    - Currently authenticated

- [x] Groups (100%)
    - Create
    - View
    - List all
    - Update
    - Delete

- [x] Companies (100%)
    - Create
    - View
    - List all
    - Update
    - Delete
    - List all company fields


Author
---------

The library was written and maintained by [Matthew Clarkson](http://mpclarkson.github.io/) from [Hilenium](https://hilenium.com).


Resources
---------

* [Freshdesk API Documentation](https://developer.freshdesk.com/api/)
