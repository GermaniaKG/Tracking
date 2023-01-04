# Germania KG · Tracking

**Classes, interfaces and traits for dealing with shipment tracking information**

https://github.com/GermaniaKG/Tracking

[![Packagist](https://img.shields.io/packagist/v/germania-kg/tracking.svg?style=flat)](https://packagist.org/packages/germania-kg/tracking)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/tracking.svg)](https://packagist.org/packages/germania-kg/tracking)
[![Tests](https://github.com/GermaniaKG/Tracking/actions/workflows/tests.yml/badge.svg)](https://github.com/GermaniaKG/Tracking/actions/workflows/tests.yml)


## Installation with Composer

```bash
$ composer require germania-kg/tracking
```

## Usage

### Interfaces and Traits

#### TrackingInfoInterface

The *TrackingInfoInterface* provides two methods, **getTrackingID** and **getTrackingLink**.



#### TrackingInfoProviderInterface

The *TrackingInfoProviderInterface* provides a **getTrackingInfo** method which returns *TrackingInfoInterface* or *null*.

#### TrackingInfoProviderTrait

The *TrackingInfoProviderTrait* introduces a public property **$tracking_info** and a public method **getTrackingInfo** which fulfills the *TrackingInfoProviderInterface*.



#### TrackingInfoAwareInterface

The *TrackingInfoAwareInterface* extends *TrackingInfoProviderInterface* and provides a **setTrackingInfo** method which accepts *TrackingInfoInterface*.

#### TrackingInfoProviderTrait

The *TrackingInfoProviderTrait* uses *TrackingInfoProviderTrait* and additionally provides setTrackingInfo a public **setTrackingInfo** method which fulfills the *TrackingInfoAwareInterface*.

### Classes

#### TrackingInfo class

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

*TrackingInfo* fulfills also **TrackingInfoProviderInterface**, since its *getTrackingInfo* method returns itself. The class also implements **JsonSerializable:**

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

*

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

