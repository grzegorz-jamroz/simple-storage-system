<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Utilities;

class Explorer
{
    public static function createFileIfNotExists(string $path): void
    {
        if (!is_file($path)) {
            file_put_contents($path, '');
        }
    }

    public static function createDirectoryIfNotExists(string $directory): void
    {
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    public static function deleteDirectory(string $dirPath): void
    {
        if (!is_dir($dirPath)) {
            throw new \Exception("$dirPath must be a directory");
        }

        if ('/' !== substr($dirPath, strlen($dirPath) - 1, 1)) {
            $dirPath .= '/';
        }

        $files = glob($dirPath . '*', GLOB_MARK);

        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDirectory($file);
            } else {
                unlink($file);
            }
        }

        rmdir($dirPath);
    }
}
