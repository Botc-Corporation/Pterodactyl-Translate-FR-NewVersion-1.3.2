<?php

return [
    'email' => [
        'title' => 'Mettez à jour votre email',
        'updated' => 'Votre adresse e-mail a été mise à jour.',
    ],
    'password' => [
        'title' => 'Changer votre mot de passe',
        'requirements' => 'Votre nouveau mot de passe doit contenir au moins 8 caractères.',
        'updated' => 'Votre mot de passe a été mis à jour.',
    ],
    'two_factor' => [
        'button' => 'Configurer l\'authentification à 2 facteurs',
        'disabled' => 'L\'authentification à deux facteurs a été désactivée sur votre compte. Vous ne serez plus invité à fournir un jeton lors de la connexion. ',
        'enabled' => 'L\'authentification à deux facteurs a été activée sur votre compte! Désormais, lors de la connexion, vous devrez fournir le code généré par votre appareil. ',
        'invalid' => 'Le jeton fourni était invalide.',
        'setup' => [
            'title' => 'Configurer l\'authentification à deux facteurs',
            'help' => 'Impossible de scanner le code? Entrez le code ci-dessous dans votre application: ',
            'field' => 'Saisir le jeton',
        ],
        'disable' => [
            'title' => 'Désactiver l\'authentification à deux facteurs',
            'field' => 'Saisir le jeton', 
        ],
    ],
];
