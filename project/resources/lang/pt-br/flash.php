<?php

    return [
        'common' => [
            'confirmation' => [
                'destroy' => 'Tem certeza que deseja apagar este registro ?',
            ],

            'error' => [
                'destroy' => 'Erro ao apagar este registro.',
                'update' => 'Erro ao editar este registro.',
            ],

            'success' => [
                'update' => 'Registro editado com sucesso.',
                'create' => 'Cadastro realizado com sucesso.',
                'destroy' => 'Registro apagado com sucesso.',
            ],
        ],

        'user' => [
            'info' => [
                'verify' => 'Faça login para terminar a verificação.',
            ],
            'success' => [
                'verify' => 'Cadastro realizado! Verifique seu email para confirmação.',
                'verified' => 'Seu email foi verificado com sucesso!',
                'destroy' => 'Usuário apagado com sucesso.',
                'invited' => 'Usuário foi convidado a juntar-se ao escritório.',
                'email_invited' => 'Convite(s) enviado(s) com sucesso!',
                'update' => 'Usuário editado com sucesso!',
                'create' => 'Usuário adicionado com sucesso!',
                'reset_password' => 'Nova senha cadastrada com sucesso!',
            ],
            'error' => [
                'office' => 'Não é permitido excluir usuário vinculado a escritório com advogados.',
                'destroy' => 'Falha ao apagar usuário.',
                'destroy_self' => 'Não é possível apagar o usuário corrente.',
                'invite' => 'Usuário já foi convidado.',
                'responsible' => 'Um advogado responsável por escritório não pode ter outro papel',
                'not_found' => 'Usuário não encontrado.',
                'email_invited' => 'Houve uma falha ao enviar o(s) Convite(s).',
            ],
        ],

    ];
