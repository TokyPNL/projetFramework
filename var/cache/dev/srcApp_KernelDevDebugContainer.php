<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOvW0nRQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOvW0nRQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOvW0nRQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOvW0nRQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOvW0nRQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OvW0nRQ',
    'container.build_id' => '2c7f9953',
    'container.build_time' => 1572951570,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOvW0nRQ');
