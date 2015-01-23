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

use Sylius\Component\Review\Model\ReviewInterface as BaseReviewInterface;

/**
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
interface ReviewInterface extends BaseReviewInterface
{
    public function getAuthor();
    public function setAuthor(UserInterface $author);
    public function getProduct();
    public function setProduct(ProductInterface $product);
}
