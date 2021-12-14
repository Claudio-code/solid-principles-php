<?php

namespace Claudio\SolidPrinciplesPhp\Model;

class Video
{
    protected string $name;
    protected bool $watched = false;
    protected  \DateInterval $duration;

    public function __construct(string $name) {
        $this->name = $name;
        $this->duration = \DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function minutesOfDuration(): int
    {
        return  $this->duration->i;
    }

    public function recoverUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->name]);
    }
}
