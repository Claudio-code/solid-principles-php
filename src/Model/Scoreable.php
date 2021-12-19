<?php

namespace Claudio\SolidPrinciplesPhp\Model;

interface Scoreable
{
    public function getScore(): int;
}