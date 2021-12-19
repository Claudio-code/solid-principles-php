<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class FeedBack
{
    public readonly int $note;
    public readonly string $statement;

    public function __construct(int $note, ?string $statement)
    {
        $this->statement = match ($note < 9 && empty($testimonial)) {
            true => throw new \DomainException("Mandatory testimonial"),
            default => $statement,
        };
        $this->note = $note;
    }
}