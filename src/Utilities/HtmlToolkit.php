<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Utilities;

class HtmlToolkit
{
    public static function cleanUp(string $html): string
    {
        $html = preg_replace(
            ['/<!--(.*)-->/Uis', '/[[:blank:]]+/'],
            ['', ' '],
            str_replace(
                ["\n", "\r", "\t"],
                '',
                $html
            )
        );

        return str_replace('> <', '><', $html ?? '');
    }
}
