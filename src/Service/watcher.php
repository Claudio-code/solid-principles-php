<?php

namespace Claudio\SolidPrinciplesPhp\Service;

use Claudio\SolidPrinciplesPhp\Model\AluraPlus;
use Claudio\SolidPrinciplesPhp\Model\Course;

class watcher
{
    public function watchCourse(Course $course): void
    {
        foreach ($course->recoverVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAluraPlus(AluraPlus $aluraPlus): void
    {
        $aluraPlus->watch();
    }
}
