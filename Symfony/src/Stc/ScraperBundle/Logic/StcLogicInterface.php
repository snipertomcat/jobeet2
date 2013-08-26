<?php

namespace Stc\ScraperBundle\Logic;

use Stc\ScraperBundle\Model\StcModelInterface;
use Stc\ScraperBundle\Model\StcModelContainer;

interface StcLogicInterface
{
    public function __construct(StcModelContainer $container);
}