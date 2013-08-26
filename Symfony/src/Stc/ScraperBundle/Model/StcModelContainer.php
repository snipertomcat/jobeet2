<?php

namespace Stc\ScraperBundle\Model;

class StcModelContainer
{
    protected $models = array();

    public function addModel($key, $model)
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
