# [SilverStripe composer versions](https://github.com/bringyourownideas/silverstripe-composer-versions) <br /> [![Build Status](https://api.travis-ci.org/bringyourownideas/silverstripe-composer-versions.svg?branch=master)](https://travis-ci.org/bringyourownideas/silverstripe-composer-versions) [![Latest Stable Version](https://poser.pugx.org/bringyourownideas/silverstripe-composer-versions/version.svg)](https://github.com/bringyourownideas/silverstripe-composer-versions/releases) [![Latest Unstable Version](https://poser.pugx.org/bringyourownideas/silverstripe-composer-versions/v/unstable.svg)](https://packagist.org/packages/bringyourownideas/silverstripe-composer-versions) [![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/bringyourownideas/silverstripe-composer-versions.svg)](https://scrutinizer-ci.com/g/bringyourownideas/silverstripe-composer-versions?branch=master) [![Total Downloads](https://poser.pugx.org/bringyourownideas/silverstripe-composer-versions/downloads.svg)](https://packagist.org/packages/bringyourownideas/silverstripe-composer-versions) [![License](https://poser.pugx.org/bringyourownideas/silverstripe-composer-versions/license.svg)](https://github.com/bringyourownideas/silverstripe-composer-versions/blob/master/license.md)

Collects information about the currently installed composer packages and saves it as a DataObject.

*Because this module could expose information to an potential attacker the information doesn't get displayed!
You need to take care of processing this information somehow! E.g. using the [SilverStripe Maintenance module](https://github.com/bringyourownideas/silverstripe-maintenance "Support for the maintainence of your SilverStripe site")*

### Requirements

* SilverStripe Framework ^3.0

### Installation

It is recommended to install this module as a development dependency:

```
composer require bringyourownideas/silverstripe-composer-versions --dev
```

Please run /dev/build after composer has finished the installation.

**It is recommended to install this as dev dependency only!**

### Usage

After the installation execute the following steps:

1. Run the dev/build to collect the information

2. Use the information in your database (Table "ComposerPackageVersion").

## MISC: [Future ideas/development, issues](https://github.com/bringyourownideas/silverstripe-composer-versions/issues), [Contributing](https://github.com/bringyourownideas/silverstripe-composer-versions/blob/master/CONTRIBUTING.md), [License](https://github.com/bringyourownideas/silverstripe-composer-versions/blob/master/license.md)
