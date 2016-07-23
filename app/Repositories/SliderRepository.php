<?php

namespace App\Repositories;



use App\Models\Slider;

class SliderRepository extends  EloquentRepository
{
    /**
     * 注入的model
     * @var $model
     */
    protected $model;

    public function __construct(Slider $slider)
    {
        $this->model=$slider;
    }

    /**
     * 获取所有的slider
     * @return mixed
     */
    public function getSliders()
    {
        $sliders=$this->all();
        return $sliders;
    }
}