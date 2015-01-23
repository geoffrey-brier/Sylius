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

use Sylius\Component\Taxonomy\Model\TaxonInterface;

/**
 * Model for Rating.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class Rating implements RatingInterface
{
    /**
     * Taxonomy id.
     *
     * @var mixed
     */
    protected $id;

    /**
     * The review.
     *
     * @var \Sylius\Component\Review\Model\ReviewInterface
     */
    protected $review;

    /**
     * The taxon criteria.
     *
     * @var \Sylius\Component\Taxonomy\Model\TaxonInterface
     */
    protected $taxonCriteria;

    /**
     * The rating.
     *
     * @var integer
     */
    protected $ratingValue;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * {@inheritdoc}
     */
    public function setReview(ReviewInterface $review)
    {
        $this->review = $review;

        if (!$review->getRatings()->contains($this)) {
            $review->addRating($this);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxonCriteria()
    {
        return $this->taxonCriteria;
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxonCriteria(TaxonInterface $taxon)
    {
        $this->taxonCriteria = $taxon;
    }

    /**
     * {@inheritdoc}
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
    }
}
