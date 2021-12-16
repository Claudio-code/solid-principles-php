<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class Course
{
    public function __construct(
        private string $name,
        private array $videos = [],
        private array $feedbacks = [],
    ) {
    }

    public function receiveFeedback(FeedBack $feedBack): void
    {
        $this->feedbacks[] = $feedBack;
    }

    public function addVideo(Video $video): void
    {
        if ($video->minutesOfDuration() < 3) {
            throw new \DomainException("very short video");
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function recoverVideos(): array
    {
        return $this->videos;
    }
}
