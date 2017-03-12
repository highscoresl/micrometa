<?php

/**
 * micrometa
 *
 * @category Jkphl
 * @package Jkphl\Micrometa
 * @subpackage Jkphl\Micrometa\Ports\Rel
 * @author Joschi Kuphal <joschi@kuphal.net> / @jkphl
 * @copyright Copyright © 2017 Joschi Kuphal <joschi@kuphal.net> / @jkphl
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/***********************************************************************************
 *  The MIT License (MIT)
 *
 *  Copyright © 2017 Joschi Kuphal <joschi@kuphal.net> / @jkphl
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of
 *  this software and associated documentation files (the "Software"), to deal in
 *  the Software without restriction, including without limitation the rights to
 *  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *  the Software, and to permit persons to whom the Software is furnished to do so,
 *  subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 ***********************************************************************************/

namespace Jkphl\Micrometa\Ports\Rel;

/**
 * Alternate resource
 *
 * @package Jkphl\Micrometa
 * @subpackage Jkphl\Micrometa\Ports
 */
class Alternate extends Rel implements AlternateInterface
{
    /**
     * Alternate resource type
     *
     * @var string
     */
    protected $type;
    /**
     * Alternate resource title
     *
     * @var string
     */
    protected $title;

    /**
     * Alternate resource constructor
     *
     * @param string $value Alternate resource URL
     * @param string $type Alternate resource type
     * @param string $title Alternate resource title
     */
    public function __construct($value, $type, $title)
    {
        parent::__construct($value);
        $this->type = $type;
        $this->title = $title;
    }

    /**
     * Return the alternate resource type
     *
     * @return string Alternate resource type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Alternate resource title
     *
     * @return string Alternate resource title
     */
    public function getTitle()
    {
        return $this->title;
    }
}
