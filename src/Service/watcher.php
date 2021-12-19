<?php

namespace Claudio\SolidPrinciplesPhp\Service;

use Claudio\SolidPrinciplesPhp\Model\Scoreable;

class watcher
{
    public function watchScoreableContents(Scoreable $scoreable)
    {
        $scoreable->watch();
    }
}
