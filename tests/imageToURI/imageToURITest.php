<?php

/*
 * This file is part of the imageToURI.
 *
 * (c) Daniel Rodrigues (geekcom)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace imageToURI\Test;

use PHPUnit\Framework\TestCase;
use imageToURI\imageToURI;

/**
 * @author Daniel Rodrigues
 */
class imageToURITest extends TestCase
{
    public function testConstructor()
    {
        $this->assertInstanceOf(imageToURI::class, new imageToURI());
    }
}
