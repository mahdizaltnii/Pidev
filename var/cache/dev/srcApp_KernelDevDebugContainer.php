<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVISi3nH\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVISi3nH/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVISi3nH.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVISi3nH\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVISi3nH\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VISi3nH',
    'container.build_id' => '3440dc0f',
    'container.build_time' => 1652620129,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVISi3nH');
