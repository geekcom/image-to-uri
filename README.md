# imageToUri
_A simple PHP class for batch convert images to data URI_

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

## How to use

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