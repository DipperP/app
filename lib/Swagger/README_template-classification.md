# Swagger

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 
- Package version: 1.0.0
- Build date: 2016-06-02T13:36:56.425+02:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Wikia/app.git"
    }
  ],
  "require": {
    "Wikia/app": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Swagger/autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TCSApi();
$wiki_id = 56; // int | Wikia ID
$page_id = 56; // int | Article ID

try {
    $result = $api_instance->getTemplateDetails($wiki_id, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCSApi->getTemplateDetails: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*TCSApi* | [**getTemplateDetails**](docs/TCSApi.md#gettemplatedetails) | **GET** /{wiki_id}/{page_id}/providers | Provides all template types with providers information
*TCSApi* | [**getTemplateType**](docs/TCSApi.md#gettemplatetype) | **GET** /{wiki_id}/{page_id} | Provides template type
*TCSApi* | [**getTemplateTypesOnWiki**](docs/TCSApi.md#gettemplatetypesonwiki) | **GET** /{wiki_id} | Provides template types on wiki
*TCSApi* | [**insertTemplateDetails**](docs/TCSApi.md#inserttemplatedetails) | **POST** /{wiki_id}/{page_id} | Save template type data


## Documentation For Models

 - [TemplateTypeHolder](docs/TemplateTypeHolder.md)
 - [TemplateTypeProvider](docs/TemplateTypeProvider.md)
 - [TemplateTypeStats](docs/TemplateTypeStats.md)


## Documentation For Authorization


## access_token

- **Type**: API key 
- **API key parameter name**: X-Wikia-AccessToken
- **Location**: HTTP header

## user_id

- **Type**: API key 
- **API key parameter name**: X-Wikia-UserId
- **Location**: HTTP header


## Author




