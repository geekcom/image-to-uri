# imageToUri
_A simple PHP class for batch convert images to data URI_

## What Is a Data URI?

A data URI is a base64 encoded string that represents a file.
Getting the contents of a file as a string means that you can directly
embed the data within your HTML or CSS code. When the browser encounters
a data URI in your code, it’s able to decode the data and construct the
original file.

## Why Data URIs?

The main benefit to using data URIs is that you can reduce the number of
HTTP requests that your site needs to make to load the page.
Each individual file referenced in your CSS or HTML code will
create a new HTTP request. By using data URIs, you’re actually
embedding the file data directly within your HTML or CSS file,
so there’s no need to make a HTTP request to fetch the resource.

## Installation

Install [Composer](http://getcomposer.org) if you don't have it.
```
composer require geekcom/image-to-uri
```
Or in your file'composer.json' add:

```json
{
    "require": {
        "geekcom/image_to_uri": "^1.0.0"
    }
}
```

And the just run:

    composer install

and thats it.

----------------------------------------------------------------------------------------------------------------------------

### How to use

* Put all the images you want to convert into the folder **/images**
* The file containing the URIs data will be written at folder **/dataUris**
* **imageToURI(array $images, string $outputFile, bool $overWrite = false)**

#### Example

```php

require __DIR__ . '/src/image2URI.php';

use imageToURI\imageToURI;

$images = new imageToURI();

$images->imageToURI(['images/image1.png', 'images/image2.png' ], 'dataUris/dataUris.txt', false);
```

## [License](https://github.com/geekcom/image-to-uri/blob/master/LICENSE)

MIT