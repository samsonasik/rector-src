<?php

declare(strict_types=1);

use Rector\Core\ValueObject\PhpVersion;
use Rector\DeadCode\Rector\ConstFetch\RemovePhpVersionIdCheckRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(RemovePhpVersionIdCheckRector::class)
        ->configure([PhpVersion::PHP_80]);
};