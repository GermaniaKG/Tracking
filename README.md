# Germania KG · Tracking

**Classes, interfaces and traits for dealing with shipment tracking information**

[![Packagist](https://img.shields.io/packagist/v/germania-kg/tracking.svg?style=flat)](https://packagist.org/packages/germania-kg/tracking)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/tracking.svg)](https://packagist.org/packages/germania-kg/tracking)
[![Build Status](https://img.shields.io/travis/GermaniaKG/Tracking.svg?label=Travis%20CI)](https://travis-ci.org/GermaniaKG/Tracking)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Tracking/build-status/master)


## Installation with Composer

```bash
$ composer require germania-kg/tracking
```


## Usage

### TrackingInfoInterface

The *TrackingInfoInterface* provides two methods, **getTrackingID** and **getTrackingLink**. 

### TrackingInfo class

The *TrackingInfo* class extends **TrackingInfoAbstract** which implements *TrackingInfoInterface*. It additionally provides setter methods **setTrackingID** and **setTrackingLink:**

```php
<?php
use Germania\Tracking\TrackingInfo;

$ti = new TrackingInfo;
$ti->setTrackingID( "123456" );
$ti->setTrackingLink( "https://parcels.test.com?id=123456" );

echo $ti->getTrackingID();   // "123456"
echo $ti->getTrackingLink(); // "https://parcels.test.com?id=123456"
```

*TrackingInfo* also implements **JsonSerializable:**

```php
$ti = new TrackingInfo;
$ti->setTrackingID( "123456" );
$ti->setTrackingLink( "https://parcels.test.com?id=123456" );

// As array:
$array = $ti->jsonSerialize();
echo $array['id'];   // "123456"
echo $array['href']; // "https://parcels.test.com?id=123456"

// StdClass:
$encoded = json_encode( $ti );
$decoded = json_decode( $encoded );

echo $decoded->id;   // "123456"
echo $decoded->href; // "https://parcels.test.com?id=123456"

```



## Development

```bash
$ git clone https://github.com/GermaniaKG/Tracking.git
$ cd Tracking
$ composer install
```

## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```

