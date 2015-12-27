<?php

return [
    'default' => [
        'users.password.change',
    ],
    'admin' => [
        'users.manage',
        'users.password.change.all',
        'settings.manage',
        'sessions.access',
    ],
    'manager' => [
        'users.avatar.upload',
        'dispatching-room.access',
    ],
];