<?php

/**

 * @package Devops_challenge_Junior

 * @version 1.1

 */

/*

Plugin Name: Devops Challenge Júnior

Plugin URI: https://apiki.com/

Description: Sabe de nada, inocente! Ordinária!!

Author: Apiki WordPress

Version: 1.1

*/


// Inicialização da variável global corretamente

$global_lyrics = "";


function apiki_segura_o_tchan()
{

	// Declaração correta da variável global dentro da função

	global $global_lyrics;



	// Definição da string de letras da música adicionando quebra de linhas e concatenação de string da forma correta
	$global_lyrics = "Pau que nasce torto nunca se endireita\n"

		. "Menina que requebra a mãe pega na cabeça\n"

		. "Pau que nasce torto nunca se endireita\n"

		. "Menina que requebra a mãe pega na cabeça\n"

		. "Domingo ela não vai (vai, vai)\n"

		. "Domingo ela não vai não (vai, vai, vai)\n"

		. "Olha, domingo ela não vai (vai, vai)\n"

		. "Domingo ela não vai não (vai, vai, vai)\n"

		. "O pau que nasce torto nunca se endireita\n"

		. "Menina que requebra a mãe pega na cabeça\n"

		. "Pau que nasce torto nunca se endireita\n"

		. "Menina que requebra a mãe pega na cabeça\n"

		. "Segure o tchan\n"

		. "Amarre o tchan\n"

		. "Segure o tchan tchan tchan tchan\n"

		. "Depois de nove meses você vê o resultado\n"

		. "Esse é o Gera Samba arrebentando no pedaço\n"

		. "Joga ela no meio, mete em cima, mete embaixo";



	// Explode corretamente a string em um array

	$lyrics_array = explode("\n", $global_lyrics);


	// Correção da chamada de mt_rand() para evitar erro de índice

	return wptexturize($lyrics_array[mt_rand(0, count($lyrics_array) - 1)]);
}


function devops_challenge()
{

	// Inicializando corretamente a variável escolhida

	$chosen = apiki_segura_o_tchan();

	$lang = '';


	// Verificação correta do idioma

	if ('en_' !== substr(get_user_locale(), 0, 3)) {

		$lang = ' lang="en"';
	}



	// Correção da função printf para incluir a variável $chosen e addicionar o estilo css 
	printf(
		'<div>%s %s</div>',
		__('Segure o Tchan, by Apiki WordPress:'),
		$chosen
	);
}


// Correção do hook: adicionando o identificador correto para exibição no painel

add_action('admin_notices', 'devops_challenge');

// Correção do hook para adicionar CSS corretamente
function devop_enqueue_admin_styles()
{
	wp_enqueue_style('devop-admin-style', false);

	$custom_css = "
        #devop {
            float: right;
            padding: 5px 10px;
            margin: 0;
            font-size: 50px;
            line-height: 1.6666;
        }

        .rtl #devop {
            float: left;
        }

        .block-editor-page #devop {
            display: none;
        }

        @media screen and (max-width: 782px) {
            #devop,
            .rtl #devop {
                float: none;
                padding-left: 0;
                padding-right: 0;
            }
        }
    ";

	wp_add_inline_style('devop-admin-style', $custom_css);
}

add_action('admin_enqueue_scripts', 'devop_enqueue_admin_styles');
