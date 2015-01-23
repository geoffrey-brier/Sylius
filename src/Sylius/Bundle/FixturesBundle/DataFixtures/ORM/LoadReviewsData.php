<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Sylius\Bundle\FixturesBundle\DataFixtures\DataFixture;

/**
 * Creates sample reviews and ratings.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class LoadReviewsData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1 ; $i < 120 ; $i++) {
            $product = $this->getReference('Sylius.Product.'.$i);
            $maxReviews = rand(0, 3);

            for ($j = 1 ; $j < $maxReviews ; $j++) {
                $product->addReview($this->createReview());
            }
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 7;
    }

    protected function createReview()
    {
        $review = $this->get('review')->createNew();

        $review->setGlobalRating($this->faker->numberBetween(0, 5));
        $review->setContent($this->faker->paragraph);

        foreach (array('Quality', 'Comfort') as $taxonName) {
            $rating = $this->get('rating')->createNew();

            $rating->setRatingValue($this->faker->numberBetween(0, 5));
            $rating->setTaxonCriteria($this->getReference('Sylius.Taxon.'.$taxonName));
            $rating->setReview($review);
        }

        $review->setAuthor($this->getReference('Sylius.User-'.$this->faker->numberBetween(1, 15)));

        return $review;
    }
}
