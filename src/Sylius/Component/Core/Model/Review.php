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

use Sylius\Component\Review\Model\Review as BaseReview;

/**
 * Review.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class Review extends BaseReview implements ReviewInterface
{

    /**
     * Reviewer.
     *
     * @var \Sylius\Component\Core\Model\UserInterface
     */
    protected $author;

    /**
     * Product reviewed.
     *
     * @var \Sylius\Component\Core\Model\ProductInterface
     */
    protected $product;


    /**
     * {@inheritdoc}
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * {@inheritdoc}
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;

        if ($product->getReviews()->contains($this)) {
            $product->addReview($this);
        }
    }
}
