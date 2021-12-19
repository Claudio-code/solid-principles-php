<?php

namespace Claudio\SolidPrinciplesPhp\Service;

use Claudio\SolidPrinciplesPhp\Model\Scoreable;

class CalculatorPunctuation
{
    public function recoverPunctuation(Scoreable $content): int
    {
        return $content->getScore();
    }
}
