<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Taxonomy\Model;

use PhpSpec\ObjectBehavior;

/**
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class ReviewSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Component\Review\Model\Review');
    }

    function it_implements_Sylius_taxon_interface()
    {
        $this->shouldImplement('Sylius\Component\Review\Model\ReviewInterface');
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }
}
