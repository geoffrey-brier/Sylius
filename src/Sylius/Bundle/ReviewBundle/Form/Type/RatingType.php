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
 * Rating form type.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class RatingType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ratingValue', 'integer', array(
                'label' => 'sylius.form.rating.ratingValue'
            ))
            ->add('taxonCriteria', 'hidden');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_rating';
    }
}
