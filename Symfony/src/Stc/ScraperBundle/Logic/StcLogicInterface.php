<?php

namespace Stc\ScraperBundle\Logic;

use Stc\ScraperBundle\Model\StcModelInterface;

interface StcLogicInterface
{
    public function __construct(StcModelInterface $dataModel);
}