<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Review\Model;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Review\Model\ReviewInterface;
use Sylius\Component\Taxonomy\Model\TaxonInterface;

/**
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class RatingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Component\Review\Model\Rating');
    }

    function it_implements_sylius_rating_interface()
    {
        $this->shouldImplement('Sylius\Component\Review\Model\RatingInterface');
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_has_no_review_by_default()
    {
        $this->getReview()->shouldReturn(null);
    }

    function it_allows_setting_a_review(ReviewInterface $review)
    {
        $this->setReview($review);
        $this->getReview()->shouldReturn($review);
    }

    function it_has_no_value_by_default()
    {
        $this->getRatingValue()->shouldReturn(null);
    }

    function it_allows_setting_a_value()
    {
        $this->setRatingValue(4);
        $this->getRatingValue()->shouldReturn(4);
    }

    function it_has_no_criteria_by_default()
    {
        $this->getTaxonCriteria()->shouldReturn(null);
    }

    function it_allows_setting_a_criteria(TaxonInterface $taxon)
    {
        $this->setTaxonCriteria($taxon);
        $this->getTaxonCriteria()->shouldReturn($taxon);
    }
}
