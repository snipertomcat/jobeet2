<?php

namespace Stc\ScraperBundle\Model\StcModelContainer;

use Stc\ScraperBundle\Model\StcModelInterface;

class StcModelContainer
{
    protected $models = array();

    public function addModel($key, StcModelInterface $model)
    {
        $this->models[$key] = $model;
    }

    public function getModel($key)
    {
        if (isset($this->models[$key])) {
            return $this->models[$key];
        }
    }
}