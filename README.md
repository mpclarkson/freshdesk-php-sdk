Freshdesk PHP API v2 Library
============================

This is a php wrapper for the [Freshdesk](https://www.freshdesk.com) API v2.

If you have questions contact us or open an issue on GitHub. PRs are welcome.

[![Build Status](https://travis-ci.org/mpclarkson/freshdesk-php.svg?branch=master)](https://travis-ci.org/mpclarkson/freshdesk-php)

Quickstart
-------------------
```php
require __DIR__ . '/vendor/autoload.php';
use \Freshdesk\TicketApi;

$api = new TicketApi("your_freshdesk_api_key", "your_freshdesk_domain");

$allTickets = $api->all(); //List all tickets

$ticket = $api->view(25); //View a single ticket
```

Install with Composer
-------------------
To integrate this library into your application, use [Composer](https://getcomposer.org).

Add `mpclarkson/freshdesk-php` to your **composer.json** file:

```json
{
    "require": {
        "mpclarkson/freshdesk-php": "dev-master"
    }
}

```

Then run:

```php
php composer.phar install
```

Api Overview
-------------------

This is a work in progress and the following have been implemented:

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

The library was written an maintained by [Matthew Clarkson](http://mpclarkson.github.io/) from [Hilenium](https://hilenium.com).


Resources
---------

* [Freshdesk API Documentation](https://developer.freshdesk.com/api/)
