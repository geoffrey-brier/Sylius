<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Core\Model;

use Sylius\Component\Review\Model\Rating as BaseRating;

/**
 * Rating attached to order.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class Rating extends BaseRating implements RatingInterface
{
}
