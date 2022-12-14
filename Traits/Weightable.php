<?php

trait Weightable
{
    protected $weight;



    public function setWeight(float $_weight, $_unit)
    {
        if (!is_float($_weight)) {
            throw new Exception('Peso non disponibile');
        }
        return
            $this->weight = $_weight . $_unit;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}