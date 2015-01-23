<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ReviewBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Review form type.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class ReviewType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // FIXME Rating collection
        $builder
            ->add('globalRating', 'integer', array(
                'label' => 'sylius.form.review.globalRating'
            ))
            ->add('content', 'textarea', array(
                'label' => 'sylius.form.review.content'
            ))
            ->add('ratings', 'collection', array(
                'type' => 'sylius_rating',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_review';
    }
}
