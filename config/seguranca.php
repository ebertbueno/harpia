<?php

return [
    'prelogin_openroutes' => array(
        'auth.login',
        'index',
        'auth.matriculas-alunos.login',
        'auth.matriculas-alunos.logout',
        'matriculas-alunos.index.alunos'

    ),

    'postlogin_openroutes' => array(
        'auth.logout',
        'index',
        'seguranca.profile.index',
        'seguranca.profile.edit',
        'seguranca.profile.updatepassword',
        'auth.matriculas-alunos.login',
        'auth.matriculas-alunos.logout',
        'matriculas-alunos.index.alunos'
    )
];
