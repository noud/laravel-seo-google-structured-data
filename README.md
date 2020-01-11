# Laravel SEO Google Structured data

Laravel SEO Google Structured data package.

## Requirements

* PHP 7.2+
* Laravel 5.6+

## Installation

Install the package by running this command in your terminal/cmd:
```
composer require noud/laravel-seo-google-structured-data
```

## Usage in models

Now you can extend your models from Google Structured data
```
<?php

namespace App\Models;

use SEO\Google\Structured\data\Models\WebSite as GoogleWebSite;

class WebSiteGoogle extends GoogleWebSite
{}
```

## Structured data and Types used

### [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article)

- [Sitelinks Searchbox](https://developers.google.com/search/docs/data-types/sitelinks-searchbox)

### [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article) conform [Schema.org](https://schema.org)

- [Article](https://developers.google.com/search/docs/data-types/article) can be
    - [Article](https://schema.org/Article)
    - [NewsArticle](https://schema.org/NewsArticle)
    - [BlogPosting](https://schema.org/BlogPosting)
- [Breadcrumb](https://developers.google.com/search/docs/data-types/breadcrumb) consists of
    - [BreadcrumbList](https://schema.org/BreadcrumbList)
    - [ListItem](https://schema.org/ListItem)
- [Carousel](https://developers.google.com/search/docs/data-types/carousel) consists of
    - [ItemList](https://schema.org/ItemList)
    - [ListItem](https://schema.org/ListItem)
- [Job Posting](https://developers.google.com/search/docs/data-types/job-posting) is
    - [JobPosting](https://schema.org/JobPosting)
- [Local Business Listing](https://developers.google.com/search/docs/data-types/local-business) is
    - [LocalBusiness](https://schema.org/LocalBusiness)

## [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model)

![Google Structured data Entity-Relationship Diagram](./docs/erd.png?raw=true "Google Structured data Entity-Relationship Diagram")

## Development

Put this package directory beside your project directory.

In ```conmposer.json``` of the target project add
```
    "require": {
        "noud/laravel-seo-google-structured-data": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "../laravel-seo-google-structured-data"
        }
    ]
```
In ```.env``` of the target project i set the database to an alternative database
```
DB_DATABASE=google-structured-data
#DB_DATABASE=seo
```

## Development migration

I migrate just this schema like so in the target project:
```
php artisan migrate --realpath --path=/var/www/laravel-seo-google-structured-data/src/database/migrations
```

## Development models generation

In the target project set the path and namespace in ```config/models.php```
```
        'path' => app_path('Models-google-structured-data'),
        'namespace' => 'SEO\Google\Structured\data\Models',
```
I generate the models from this schema like so in the target project:
```
php artisan code:models --schema=google-structured-data
```

Then copy everything from ```app/Models-google-structured-data``` to the package.