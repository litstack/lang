<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CRUD Language Lines
    |--------------------------------------------------------------------------
    |
    | The crud translations include all translations related to the litstack
    | crud system. This includes fields and other parts of the crud pages.
    |
    */

    'sort_new_to_old'  => 'Novos primeiro',
    'sort_old_to_new'  => 'Antigos primeiro',
    'preview'          => 'Pré-visualizar ',
    'of'               => 'de',
    'n_items_selected' => ':count item selecionado | :count itens selecionados',

    'messages' => [
        'not_created'   => ':model tem que ser criado para adicionar <i>:relation</i>.',
        'deleted_items' => 'Item :count excluído.|Itens :count excluídos.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'Expandir',
            'expand_all'   => 'Expandir Todos',
            'collapse_all' => 'recolher todos',
            'messages'     => [
                'new_block' => 'Adicionado novo :type bloco',

            ],
        ],
        'relation' => [
            'goto'     => 'Editar Item',
            'unlink'   => 'Remover Item',
            'edit'     => 'Editar Item',
            'messages' => [
                'relation_linked'   => '{relation} inserido com sucesso .',
                'relation_unlinked' => 'Removido item da relação.',
                'confirm_unlink'    => 'Por favor, confirme que você deseja desvincular o item.',
                'max_items_reached' => 'A maximum of :count items can be selected Um máximo de :count podem ser selecionados .',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'abrir em uma nova janela',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'A lista pode ser aninhada um máximo de :count níveis.',
                'confirm_delete'      => 'Deseja realmente remover o :item?',
                'confirm_delete_info' => 'Se você remover este item, você também removerá todos os itens da filhos abaixo dele..',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Arquivo enviado com sucesso.',
                'image_alt_hint'   => 'Texto alternativo (texto que descreve este meio) melhora a acessibilidade e a experiência do usuário para pessoas que não conseguem ver imagens em páginas da Web, incluindo usuários que usam aplicativos de leitor de tela ou têm conexões de baixa largura de banda.',
                'image_title_hint' => 'O título aparece no navegador como uma dica de ferramenta, se você mover o ponteiro do mouse sobre a imagem.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Sentença significativa facilmente compreensível. Dá uma ideia do que é o conteúdo da página. Máximo :width de largura.',
        'keywords_hint'    => 'As palavras-chave mais importantes do conteúdo da página. Únicas (poucas) palavras separadas por vírgulas.',
        'description_hint' => 'Resumo curto, mas significativo da página. Contém as palavras-chave mais importantes do conteúdo da página.',
    ],
];
