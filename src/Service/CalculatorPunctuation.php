<?php

namespace Claudio\SolidPrinciplesPhp\Service;

use Claudio\SolidPrinciplesPhp\Model\AluraPlus;
use Claudio\SolidPrinciplesPhp\Model\Course;

class CalculatorPunctuation
{
    public function recoverPunctuation(Course | AluraPlus $content): int
    {
        return match ($content instanceof Course) {
            true => 100,
            default => $content->minutesOfDuration() * 2,
        };
    }
}
