<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMXzsuAx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMXzsuAx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMXzsuAx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMXzsuAx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMXzsuAx\App_KernelDevDebugContainer([
    'container.build_hash' => 'MXzsuAx',
    'container.build_id' => '4a748aed',
    'container.build_time' => 1649094420,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMXzsuAx');