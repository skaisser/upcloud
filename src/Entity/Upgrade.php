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
final class Upgrade extends AbstractEntity
{
    /**
     * @var int
     */
    public $dropletId;

    /**
     * @var string
     */
    public $dateOfMigration;

    /**
     * @var string
     */
    public $url;

    /**
     * @param string $dateOfMigration
     */
    public function setDateOfMigration($dateOfMigration)
    {
        $this->dateOfMigration = static::convertDateTime($dateOfMigration);
    }
}
