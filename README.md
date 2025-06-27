A simple calculator implemented as a Jaxon package
==================================================

This repo demonstrates a Jaxon package implementation.

Installation
------------

In a project that already have the Jaxon packages installed.

```bash
composer require jaxon-php/jaxon-demo-calc
```

Insert the calculator in a page
-------------------------------

The HTML code of the calculator is returned by this call.
It uses the Bootstrap 5 CSS framework.

```php
    jaxon()->package(Jaxon\Demo\Calc\Package::class)->getHtml()
```
