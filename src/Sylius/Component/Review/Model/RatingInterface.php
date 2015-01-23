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
 * Interface for mark.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
interface RatingInterface
{
    public function getId();
    public function getReview();
    public function setReview(ReviewInterface $review);
    public function getTaxonCriteria();
    public function setTaxonCriteria(TaxonInterface $taxon);
    public function getRatingValue();
    public function setRatingValue($ratingValue);
}
