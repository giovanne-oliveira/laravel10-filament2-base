<?php

return [
    'models' => [
        'User'       => \App\Models\User::class,
        'Role'       => \App\Models\Role::class,
        'Permission' => \App\Models\Permission::class,
    ],
    'resources'     => [
        'UserResource'       => App\Resources\UserResource::class,
        'RoleResource'       => App\Resources\RoleResource::class,
        'PermissionResource' => App\Resources\PermissionResource::class,
    ],
    'pages'         => [
        'Profile' => \Phpsa\FilamentAuthentication\Pages\Profile::class
    ],
    'Widgets'       => [
        'LatestUsers' => [
            'enabled' => true,
            'limit'   => 5,
            'sort'    => 0
        ],
    ],
    'preload_roles' => true,
    'impersonate'   => [
        'enabled'  => true,
        'guard'    => 'web',
        'redirect' => '/'
    ]
];
