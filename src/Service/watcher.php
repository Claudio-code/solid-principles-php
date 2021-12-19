<?php

namespace Claudio\SolidPrinciplesPhp\Service;

use Claudio\SolidPrinciplesPhp\Model\Interfaces\Watch;

class watcher
{
    public function watchScoreableContents(Watch $scoreable)
    {
        $scoreable->watch();
    }
}
