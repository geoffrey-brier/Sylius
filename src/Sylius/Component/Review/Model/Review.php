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

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class Review implements ReviewInterface
{
    /**
     * Review id.
     *
     * @var mixed
     */
    protected $id;

    /**
     * Global rating.
     *
     * @var integer
     */
    protected $globalRating;

    /**
     * Review content.
     *
     * @var string
     */
    protected $content;

    /**
     * Ratings.
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $ratings;

    /**
     * Created at.
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Deleted at.
     *
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Deleted at.
     *
     * @var \DateTime
     */
    protected $deletedAt;

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
    }

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
    public function getGlobalRating()
    {
        return $this->globalRating;
    }

    /**
     * {@inheritdoc}
     */
    public function setGlobalRating($globalRating)
    {
        $this->globalRating = $globalRating;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * {@inheritdoc}
     */
    public function setRatings($marks)
    {
        $this->ratings->clear();

        foreach ($marks as $mark) {
            $this->addRating($mark);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addRating(RatingInterface $mark)
    {
        $this->ratings->add($mark);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getDeletedAt()
    {
        return $this->getDeletedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function setDeletedAt(\DateTime $deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->deletedAt !== null;
    }
}
