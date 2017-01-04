<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit180c4ccdf59490ba01d661e78ca5ba0d
{
    public static $classMap = array (
        'Avion' => __DIR__ . '/../..' . '/app/model/naoruzanje/Avion.php',
        'Bomba' => __DIR__ . '/../..' . '/app/model/naoruzanje/Bomba.php',
        'Borba' => __DIR__ . '/../..' . '/app/controller/Borba.php',
        'Brod' => __DIR__ . '/../..' . '/app/model/naoruzanje/Brod.php',
        'ComposerAutoloaderInit180c4ccdf59490ba01d661e78ca5ba0d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit180c4ccdf59490ba01d661e78ca5ba0d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Helikopter' => __DIR__ . '/../..' . '/app/model/naoruzanje/Helikopter.php',
        'InstrukcijaInterface' => __DIR__ . '/../..' . '/app/model/vojska/InstrukcijaInterface.php',
        'IzborOruzja' => __DIR__ . '/../..' . '/app/controller/IzborOruzja.php',
        'KreiranjeVojske' => __DIR__ . '/../..' . '/app/controller/KreiranjeVojske.php',
        'OruzjeInterface' => __DIR__ . '/../..' . '/app/model/naoruzanje/OruzjeInterface.php',
        'Pesadinac' => __DIR__ . '/../..' . '/app/model/vojska/Pesadinac.php',
        'Pilot' => __DIR__ . '/../..' . '/app/model/vojska/Pilot.php',
        'Pistolj' => __DIR__ . '/../..' . '/app/model/naoruzanje/Pistolj.php',
        'Podmornica' => __DIR__ . '/../..' . '/app/model/naoruzanje/Podmornica.php',
        'Puska' => __DIR__ . '/../..' . '/app/model/naoruzanje/Puska.php',
        'Snajper' => __DIR__ . '/../..' . '/app/model/naoruzanje/Snajper.php',
        'Vojnik' => __DIR__ . '/../..' . '/app/model/vojska/Vojnik.php',
        'VojnikMornarice' => __DIR__ . '/../..' . '/app/model/vojska/VojnikMornarice.php',
        'Vojska' => __DIR__ . '/../..' . '/app/model/vojska/Vojska.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit180c4ccdf59490ba01d661e78ca5ba0d::$classMap;

        }, null, ClassLoader::class);
    }
}
