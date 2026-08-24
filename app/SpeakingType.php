<?php

namespace App;

enum SpeakingType: string
{
    case Podcast = 'podcast';
    case Speaking = 'speaking';

    public function label(): string
    {
        return match ($this) {
            self::Podcast => 'Podcast',
            self::Speaking => 'Speaking',
        };
    }
}
