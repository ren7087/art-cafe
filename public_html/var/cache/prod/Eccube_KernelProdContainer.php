<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOP8ziv3\Eccube_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOP8ziv3/Eccube_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerOP8ziv3.legacy');

    return;
}

if (!\class_exists(Eccube_KernelProdContainer::class, false)) {
    \class_alias(\ContainerOP8ziv3\Eccube_KernelProdContainer::class, Eccube_KernelProdContainer::class, false);
}

return new \ContainerOP8ziv3\Eccube_KernelProdContainer([
    'container.build_hash' => 'OP8ziv3',
    'container.build_id' => '99bba032',
    'container.build_time' => 1667025514,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOP8ziv3');
