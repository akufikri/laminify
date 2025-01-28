<?php

namespace Akufikri\Laminify\Helpers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class Minifier
{
    public static function minifyCss(string $content): string
    {
        return preg_replace(['!/\\*.*?\\*/!s', '/\\s+/'], ['', ' '], $content);
    }

    public static function minifyJs(string $content): string
    {
        $tempFile = tempnam(sys_get_temp_dir(), 'js');
        file_put_contents($tempFile, $content);

        $process = new Process(['npx', 'terser', $tempFile, '--compress', '--mangle']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $minifiedContent = $process->getOutput();
        unlink($tempFile);

        return $minifiedContent;
    }
}