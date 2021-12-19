<?php

namespace Claudio\SolidPrinciplesPhp\Model;

final class Slug
{
    private string $slug;

    public function __construct(string $content)
    {
        $this->slug = str_replace(' ', '-', strtolower($content));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}
