<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class AluraPlus extends Video
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function recoverUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }
}
