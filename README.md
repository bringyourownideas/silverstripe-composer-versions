# [SilverStripe composer versions](https://github.com/spekulatius/silverstripe-composer-versions)

[![Build Status](https://api.travis-ci.org/spekulatius/silverstripe-composer-versions.svg?branch=master)](https://travis-ci.org/spekulatius/silverstripe-composer-versions)
[![Latest Stable Version](https://poser.pugx.org/spekulatius/silverstripe-composer-versions/version.svg)](https://github.com/spekulatius/silverstripe-composer-versions/releases)
[![Latest Unstable Version](https://poser.pugx.org/spekulatius/silverstripe-composer-versions/v/unstable.svg)](https://packagist.org/packages/spekulatius/silverstripe-composer-versions)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/spekulatius/silverstripe-composer-versions.svg)](https://scrutinizer-ci.com/g/spekulatius/silverstripe-composer-versions?branch=master)
[![Total Downloads](https://poser.pugx.org/spekulatius/silverstripe-composer-versions/downloads.svg)](https://packagist.org/packages/spekulatius/silverstripe-composer-versions)
[![License](https://poser.pugx.org/spekulatius/silverstripe-composer-versions/license.svg)](https://github.com/spekulatius/silverstripe-composer-versions/blob/master/license.md)

Collects information about the currently installed composer packages and saves it as a DataObject.

*Because this module could expose information to an potential attacker the information doesn't get displayed!
You need to take care of processing this information somehow! E.g. using the [SilverStripe Maintenance module](https://github.com/FriendsOfSilverStripe/silverstripe-maintenance)*

## Requirements

* SilverStripe Framework ^3.0

## Installation

It is recommended to install this module as a development dependency:

```
composer require spekulatius/silverstripe-composer-versions dev-master --dev
```

Please run /dev/build after composer has finished the installation.

**Recommendation is to only install this as dev dependency!**

## Usage

After the installation execute the following steps:

1. Run the dev/build to collect the information

2. Use the information in your database (Table "ComposerPackageVersion").

## Ideas

* Export functionality to support e.g. support requests
