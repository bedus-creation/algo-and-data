<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit887ff0728dd9f02c18af32b0fffbba64
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit887ff0728dd9f02c18af32b0fffbba64::$classMap;

        }, null, ClassLoader::class);
    }
}