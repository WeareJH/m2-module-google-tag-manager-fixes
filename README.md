# m2-module-google-tag-manager-fixes

This is provided as a fix for https://github.com/magento/magento2/issues/18536

## Installation
This module is installable via `Composer`.

## Add repository

```
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:WeareJH/m2-module-google-tag-manager-fixes.git"
    }
]
```

### via composer CLI

```
$ cd project-root
$ ./composer.phar require "wearejh/m2-module-google-tag-manager-fixes"
```


## Using the module

```
./bin/magento module:enable Jh_GoogleTagManagerFixes
./bin/magento setup:upgrade
```
