<?php

namespace Claudio\SolidPrinciplesPhp\Model;

use Claudio\SolidPrinciplesPhp\Model\Interfaces\Scoreable;
use Claudio\SolidPrinciplesPhp\Model\Interfaces\Watch;

class Course implements Scoreable, Watch
{
    public function __construct(
        public        readonly string $name,
        private array $videos = [],
        private array $feedbacks = [],
    ) {}

    public function receiveFeedback(FeedBack $feedBack): void
    {
        $this->feedbacks[] = $feedBack;
    }

    public function addVideo(Video $video): void
    {
        $this->videos[] = match ($video->minutesOfDuration() < 3) {
            true => throw new \DomainException("very short video"),
            default => $video,
        };
    }

    /** @return Video[] */
    public function recoverVideos(): array
    {
        return $this->videos;
    }

    /** @return FeedBack[] */
    public function recoverFeedback(): array
    {
        return $this->feedbacks;
    }

    public function getScore(): int
    {
        return 100;
    }

    public function watch(): void
    {
        foreach ($this->recoverVideos() as $video) {
            $video->watch();
        }
    }
}
