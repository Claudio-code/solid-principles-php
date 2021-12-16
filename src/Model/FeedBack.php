<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class FeedBack
{
    private int $note;
    private ?string $statement = null;
    
    public function __construct(int $note, ?string $statement)
    {
        if ($note < 9 && empty($testimonial)) {
            throw new \DomainException("Mandatory testimonial");
        }

        $this->note = $note;
        $this->statement = $statement;
    }
}