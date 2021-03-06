<?php

declare(strict_types=1);

namespace App;

class Mp4Player implements AdvancedMediaPlayer
{
    public function playVlc(string $fileName): void
    {
        //do nothing
    }

    public function playMp4(string $fileName): void
    {
        print sprintf("Playing mp4 file. Name: %s" . PHP_EOL, $fileName);
    }
}
