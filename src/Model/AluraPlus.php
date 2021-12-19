<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class AluraPlus extends Video implements Scoreable
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function recoverUrl(): string
    {
        $categorySlug = new Slug($this->category);
        $nameSlug = new Slug($this->name);
        $path = $categorySlug . '/' . $nameSlug;

        return parent::recoverUrl() . $path;
    }

    public function getScore(): int
    {
        return $this->minutesOfDuration() * 2;
    }
}
