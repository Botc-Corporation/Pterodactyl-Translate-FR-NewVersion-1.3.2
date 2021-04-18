<?php

return [
    'sign_in' => 'S\'identifier',
    'go_to_login' => 'Aller à la connexion',
    'failed' => 'Aucun compte correspondant à ces informations d\'identification n\'a pu être trouvé.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Saisissez l\'adresse e-mail de votre compte pour recevoir des instructions sur la réinitialisation de votre mot de passe.',
        'button' => 'Récupérer le compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et se connecter',
    ],

    'two_factor' => [
        'label' => 'Jeton de l\'identification à 2 Facteur',
        'label_help' => 'Ce compte nécessite une deuxième couche d\'authentification pour pouvoir continuer. Veuillez saisir le code généré par votre appareil pour terminer cette connexion.',
        'checkpoint_failed' => 'Le jeton d\'authentification à deux facteurs n\'est pas valide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et doit être unique à ce site.',
    '2fa_must_be_enabled' => 'L\'administrateur a demandé que l\'authentification à 2 facteurs soit activée pour votre compte afin d\'utiliser le Panel.',
];
