<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQQxxBMF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQQxxBMF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQQxxBMF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQQxxBMF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQQxxBMF\App_KernelDevDebugContainer([
    'container.build_hash' => 'QQxxBMF',
    'container.build_id' => '46a95267',
    'container.build_time' => 1681412168,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQQxxBMF');
