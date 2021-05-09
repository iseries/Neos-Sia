[![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)
[![Packagist](https://img.shields.io/packagist/v/iseries/neos-cia.svg)](https://packagist.org/packages/iseries/neos-cia)
[![Maintenance level: Acquaintance](https://img.shields.io/badge/maintenance-%E2%99%A1-ff69b4.svg)](https://renerehme.dev)

# Sia Adaptor for Neos and Flow

### Your data belongs to you!
This [Flow](https://flow.neos.io) package allows you to store assets (resources) in [Sia](https://sia.tech/) - a decentralized cloud storage platform. No servers, no trusted third parties.

**!!! Please note that this package is still in development. It was NOT tested in production. You should use this package in a development context.**
## What is Sia?
> Sia leverages blockchain technology to create a data storage marketplace that is more robust and more affordable than traditional cloud storage providers.

## What Sia does
> When a file gets uploaded to Sia, it gets split up, encrypted, and sent all over the world. Once you upload your files, the network ensures that they're always accessible to you by copying them multiple times.
And they're never accessible to hosts because they only receive pieces of whole files that are already encrypted.
When you upload your media to Sia, every single file gets divided into 30 segments before uploading, each targeted for distribution to hosts across the world.

> If 20 out of 30 hosts go offline, a user is still able to download a files. And when hosts go offline, Sia automatically starts to re-duplicate them again. It would take a simultaneous global event to knock out enough hosts to damage the integrity of your files.


**More Information about Sia:**
https://support.sia.tech/


## Installation

The Sia adapter is installed as a regular Flow package via Composer. For your existing
project, simply include `iseries/neos-sia` into the dependencies of your Flow or Neos distribution:

### For Neos 4.* / Flow 5.*

```bash
$ composer require iseries/neos-sia:~1.0
```

## Configuration

This package is using Skynet as default hosting platform. Note that you have to register an account on https://account.siasky.net/. The current release of this package only supports the free plan, which has a storage limit up to 100GB.

### Resource Settings

```yaml
  Neos:
    Flow:
      resource:
        collections:
          persistent:
            target: siaPersistentResourcesTarget'
        targets:
          siaPersistentResourcesTarget:
            target: 'iSeries\Sia\SiaTarget'
            targetOptions:
              bucket: 'yourappname'
              keyPrefix: '/'
              baseUri: 'hns.siasky.net' # default skynet host
```

### Skynet Setting

```yaml
iSeries:
  Sia:
    skynet:
      profiles:
        # Default credentials and client options
        # Override these in your settings with real values
        default:
          credentials:
            username: '' # Authentication username to use.
            password: '' #  Authentication password to use.
            userAgent: 'Sia-Agent-2' # Default UserAgent.
```

## Credits and license

This plugin was developed by [Rene Rehme](https://www.renrehme.dev).

See LICENSE for license details.