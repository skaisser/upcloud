<?php

/*
 * This file is part of the UpCloud library.
 *
 * (c) Shirleyson Kaisser <skaisser@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UpCloud\Entity;

/**
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Domain extends AbstractEntity
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $zoneFile;
}
