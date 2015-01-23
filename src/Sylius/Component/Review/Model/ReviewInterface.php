<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Review\Model;

use Sylius\Component\Resource\Model\SoftDeletableInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

/**
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
interface ReviewInterface extends TimestampableInterface, SoftDeletableInterface
{
    /**
     * @return integer
     */
    public function getId();

    public function getGlobalRating();
    public function setGlobalRating($globalRating);
    public function getContent();
    public function setContent($content);
    public function getRatings();
    public function setRatings($ratings);
    public function addRating(RatingInterface $rating);
}
