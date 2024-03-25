<?php

/**
 * [year] Shortcode
 */

if ( !shortcode_exists( 'year' ) ) {
    add_shortcode( 'year', 'boxy_year_shortcode' );
}

function boxy_year_shortcode() {
    return date_i18n( 'Y' );
}

/**
 * Get Google Fonts (using Google Font API)
 */
function bx_get_google_fonts( $type = 'detailed' ) {
	$bx_font_array = [];

	$bx_font_array['system']['family'] = esc_html__( 'System Font (WordPress Default)', 'basil');
	$bx_font_array['system']['variants'] = [];
    $bx_font_simple_array['system'] = esc_html__( 'System Font (WordPress Default)', 'basil');

    $bx_google_fonts_static = array(
        'system' =>
        array (
            'family' => 'System Font (WordPress Default)',
            'variants' =>
            array (
            ),
        ),
        'abeezee' =>
        array (
            'family' => 'ABeeZee',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'adlam-display' =>
        array (
            'family' => 'ADLaM Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ar-one-sans' =>
        array (
            'family' => 'AR One Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'abel' =>
        array (
            'family' => 'Abel',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'abhaya-libre' =>
        array (
            'family' => 'Abhaya Libre',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'aboreto' =>
        array (
            'family' => 'Aboreto',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'abril-fatface' =>
        array (
            'family' => 'Abril Fatface',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'abyssinica-sil' =>
        array (
            'family' => 'Abyssinica SIL',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'aclonica' =>
        array (
            'family' => 'Aclonica',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'acme' =>
        array (
            'family' => 'Acme',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'actor' =>
        array (
            'family' => 'Actor',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'adamina' =>
        array (
            'family' => 'Adamina',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'advent-pro' =>
        array (
            'family' => 'Advent Pro',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'afacad' =>
        array (
            'family' => 'Afacad',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'agbalumo' =>
        array (
            'family' => 'Agbalumo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'agdasima' =>
        array (
            'family' => 'Agdasima',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'aguafina-script' =>
        array (
            'family' => 'Aguafina Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'akatab' =>
        array (
            'family' => 'Akatab',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'akaya-kanadaka' =>
        array (
            'family' => 'Akaya Kanadaka',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'akaya-telivigala' =>
        array (
            'family' => 'Akaya Telivigala',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'akronim' =>
        array (
            'family' => 'Akronim',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'akshar' =>
        array (
            'family' => 'Akshar',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'aladin' =>
        array (
            'family' => 'Aladin',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alata' =>
        array (
            'family' => 'Alata',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alatsi' =>
        array (
            'family' => 'Alatsi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'albert-sans' =>
        array (
            'family' => 'Albert Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'aldrich' =>
        array (
            'family' => 'Aldrich',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alef' =>
        array (
            'family' => 'Alef',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'alegreya' =>
        array (
            'family' => 'Alegreya',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'alegreya-sc' =>
        array (
            'family' => 'Alegreya SC',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '500',
            3 => '500italic',
            4 => '700',
            5 => '700italic',
            6 => '800',
            7 => '800italic',
            8 => '900',
            9 => '900italic',
            ),
        ),
        'alegreya-sans' =>
        array (
            'family' => 'Alegreya Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '700',
            9 => '700italic',
            10 => '800',
            11 => '800italic',
            12 => '900',
            13 => '900italic',
            ),
        ),
        'alegreya-sans-sc' =>
        array (
            'family' => 'Alegreya Sans SC',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '700',
            9 => '700italic',
            10 => '800',
            11 => '800italic',
            12 => '900',
            13 => '900italic',
            ),
        ),
        'aleo' =>
        array (
            'family' => 'Aleo',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'alex-brush' =>
        array (
            'family' => 'Alex Brush',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alexandria' =>
        array (
            'family' => 'Alexandria',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'alfa-slab-one' =>
        array (
            'family' => 'Alfa Slab One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alice' =>
        array (
            'family' => 'Alice',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alike' =>
        array (
            'family' => 'Alike',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alike-angular' =>
        array (
            'family' => 'Alike Angular',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alkalami' =>
        array (
            'family' => 'Alkalami',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alkatra' =>
        array (
            'family' => 'Alkatra',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'allan' =>
        array (
            'family' => 'Allan',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'allerta' =>
        array (
            'family' => 'Allerta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'allerta-stencil' =>
        array (
            'family' => 'Allerta Stencil',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'allison' =>
        array (
            'family' => 'Allison',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'allura' =>
        array (
            'family' => 'Allura',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'almarai' =>
        array (
            'family' => 'Almarai',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            3 => '800',
            ),
        ),
        'almendra' =>
        array (
            'family' => 'Almendra',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'almendra-display' =>
        array (
            'family' => 'Almendra Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'almendra-sc' =>
        array (
            'family' => 'Almendra SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'alumni-sans' =>
        array (
            'family' => 'Alumni Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'alumni-sans-collegiate-one' =>
        array (
            'family' => 'Alumni Sans Collegiate One',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'alumni-sans-inline-one' =>
        array (
            'family' => 'Alumni Sans Inline One',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'alumni-sans-pinstripe' =>
        array (
            'family' => 'Alumni Sans Pinstripe',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'amarante' =>
        array (
            'family' => 'Amarante',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'amaranth' =>
        array (
            'family' => 'Amaranth',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'amatic-sc' =>
        array (
            'family' => 'Amatic SC',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'amethysta' =>
        array (
            'family' => 'Amethysta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'amiko' =>
        array (
            'family' => 'Amiko',
            'variants' =>
            array (
            0 => 'regular',
            1 => '600',
            2 => '700',
            ),
        ),
        'amiri' =>
        array (
            'family' => 'Amiri',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'amiri-quran' =>
        array (
            'family' => 'Amiri Quran',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'amita' =>
        array (
            'family' => 'Amita',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'anaheim' =>
        array (
            'family' => 'Anaheim',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'andada-pro' =>
        array (
            'family' => 'Andada Pro',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => 'italic',
            6 => '500italic',
            7 => '600italic',
            8 => '700italic',
            9 => '800italic',
            ),
        ),
        'andika' =>
        array (
            'family' => 'Andika',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'anek-bangla' =>
        array (
            'family' => 'Anek Bangla',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-devanagari' =>
        array (
            'family' => 'Anek Devanagari',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-gujarati' =>
        array (
            'family' => 'Anek Gujarati',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-gurmukhi' =>
        array (
            'family' => 'Anek Gurmukhi',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-kannada' =>
        array (
            'family' => 'Anek Kannada',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-latin' =>
        array (
            'family' => 'Anek Latin',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-malayalam' =>
        array (
            'family' => 'Anek Malayalam',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-odia' =>
        array (
            'family' => 'Anek Odia',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-tamil' =>
        array (
            'family' => 'Anek Tamil',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'anek-telugu' =>
        array (
            'family' => 'Anek Telugu',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'angkor' =>
        array (
            'family' => 'Angkor',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'annapurna-sil' =>
        array (
            'family' => 'Annapurna SIL',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'annie-use-your-telescope' =>
        array (
            'family' => 'Annie Use Your Telescope',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'anonymous-pro' =>
        array (
            'family' => 'Anonymous Pro',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'anta' =>
        array (
            'family' => 'Anta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'antic' =>
        array (
            'family' => 'Antic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'antic-didone' =>
        array (
            'family' => 'Antic Didone',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'antic-slab' =>
        array (
            'family' => 'Antic Slab',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'anton' =>
        array (
            'family' => 'Anton',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'antonio' =>
        array (
            'family' => 'Antonio',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'anuphan' =>
        array (
            'family' => 'Anuphan',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'anybody' =>
        array (
            'family' => 'Anybody',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'aoboshi-one' =>
        array (
            'family' => 'Aoboshi One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'arapey' =>
        array (
            'family' => 'Arapey',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'arbutus' =>
        array (
            'family' => 'Arbutus',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'arbutus-slab' =>
        array (
            'family' => 'Arbutus Slab',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'architects-daughter' =>
        array (
            'family' => 'Architects Daughter',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'archivo' =>
        array (
            'family' => 'Archivo',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'archivo-black' =>
        array (
            'family' => 'Archivo Black',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'archivo-narrow' =>
        array (
            'family' => 'Archivo Narrow',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'are-you-serious' =>
        array (
            'family' => 'Are You Serious',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'aref-ruqaa' =>
        array (
            'family' => 'Aref Ruqaa',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'aref-ruqaa-ink' =>
        array (
            'family' => 'Aref Ruqaa Ink',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'arima' =>
        array (
            'family' => 'Arima',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'arimo' =>
        array (
            'family' => 'Arimo',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'arizonia' =>
        array (
            'family' => 'Arizonia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'armata' =>
        array (
            'family' => 'Armata',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'arsenal' =>
        array (
            'family' => 'Arsenal',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'artifika' =>
        array (
            'family' => 'Artifika',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'arvo' =>
        array (
            'family' => 'Arvo',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'arya' =>
        array (
            'family' => 'Arya',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'asap' =>
        array (
            'family' => 'Asap',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'asap-condensed' =>
        array (
            'family' => 'Asap Condensed',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            12 => '800',
            13 => '800italic',
            14 => '900',
            15 => '900italic',
            ),
        ),
        'asar' =>
        array (
            'family' => 'Asar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'asset' =>
        array (
            'family' => 'Asset',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'assistant' =>
        array (
            'family' => 'Assistant',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'astloch' =>
        array (
            'family' => 'Astloch',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'asul' =>
        array (
            'family' => 'Asul',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'athiti' =>
        array (
            'family' => 'Athiti',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'atkinson-hyperlegible' =>
        array (
            'family' => 'Atkinson Hyperlegible',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'atma' =>
        array (
            'family' => 'Atma',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'atomic-age' =>
        array (
            'family' => 'Atomic Age',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'aubrey' =>
        array (
            'family' => 'Aubrey',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'audiowide' =>
        array (
            'family' => 'Audiowide',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'autour-one' =>
        array (
            'family' => 'Autour One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'average' =>
        array (
            'family' => 'Average',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'average-sans' =>
        array (
            'family' => 'Average Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'averia-gruesa-libre' =>
        array (
            'family' => 'Averia Gruesa Libre',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'averia-libre' =>
        array (
            'family' => 'Averia Libre',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'averia-sans-libre' =>
        array (
            'family' => 'Averia Sans Libre',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'averia-serif-libre' =>
        array (
            'family' => 'Averia Serif Libre',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'azeret-mono' =>
        array (
            'family' => 'Azeret Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'b612' =>
        array (
            'family' => 'B612',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'b612-mono' =>
        array (
            'family' => 'B612 Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'biz-udgothic' =>
        array (
            'family' => 'BIZ UDGothic',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'biz-udmincho' =>
        array (
            'family' => 'BIZ UDMincho',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'biz-udpgothic' =>
        array (
            'family' => 'BIZ UDPGothic',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'biz-udpmincho' =>
        array (
            'family' => 'BIZ UDPMincho',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'babylonica' =>
        array (
            'family' => 'Babylonica',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bacasime-antique' =>
        array (
            'family' => 'Bacasime Antique',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bad-script' =>
        array (
            'family' => 'Bad Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bagel-fat-one' =>
        array (
            'family' => 'Bagel Fat One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bahiana' =>
        array (
            'family' => 'Bahiana',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bahianita' =>
        array (
            'family' => 'Bahianita',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bai-jamjuree' =>
        array (
            'family' => 'Bai Jamjuree',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'bakbak-one' =>
        array (
            'family' => 'Bakbak One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ballet' =>
        array (
            'family' => 'Ballet',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'baloo-2' =>
        array (
            'family' => 'Baloo 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-bhai-2' =>
        array (
            'family' => 'Baloo Bhai 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-bhaijaan-2' =>
        array (
            'family' => 'Baloo Bhaijaan 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-bhaina-2' =>
        array (
            'family' => 'Baloo Bhaina 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-chettan-2' =>
        array (
            'family' => 'Baloo Chettan 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-da-2' =>
        array (
            'family' => 'Baloo Da 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-paaji-2' =>
        array (
            'family' => 'Baloo Paaji 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-tamma-2' =>
        array (
            'family' => 'Baloo Tamma 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-tammudu-2' =>
        array (
            'family' => 'Baloo Tammudu 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'baloo-thambi-2' =>
        array (
            'family' => 'Baloo Thambi 2',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'balsamiq-sans' =>
        array (
            'family' => 'Balsamiq Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'balthazar' =>
        array (
            'family' => 'Balthazar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bangers' =>
        array (
            'family' => 'Bangers',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'barlow' =>
        array (
            'family' => 'Barlow',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'barlow-condensed' =>
        array (
            'family' => 'Barlow Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'barlow-semi-condensed' =>
        array (
            'family' => 'Barlow Semi Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'barriecito' =>
        array (
            'family' => 'Barriecito',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'barrio' =>
        array (
            'family' => 'Barrio',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'basic' =>
        array (
            'family' => 'Basic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'baskervville' =>
        array (
            'family' => 'Baskervville',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'battambang' =>
        array (
            'family' => 'Battambang',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '900',
            ),
        ),
        'baumans' =>
        array (
            'family' => 'Baumans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bayon' =>
        array (
            'family' => 'Bayon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'be-vietnam-pro' =>
        array (
            'family' => 'Be Vietnam Pro',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'beau-rivage' =>
        array (
            'family' => 'Beau Rivage',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bebas-neue' =>
        array (
            'family' => 'Bebas Neue',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'belanosima' =>
        array (
            'family' => 'Belanosima',
            'variants' =>
            array (
            0 => 'regular',
            1 => '600',
            2 => '700',
            ),
        ),
        'belgrano' =>
        array (
            'family' => 'Belgrano',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bellefair' =>
        array (
            'family' => 'Bellefair',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'belleza' =>
        array (
            'family' => 'Belleza',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bellota' =>
        array (
            'family' => 'Bellota',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'bellota-text' =>
        array (
            'family' => 'Bellota Text',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'benchnine' =>
        array (
            'family' => 'BenchNine',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'benne' =>
        array (
            'family' => 'Benne',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bentham' =>
        array (
            'family' => 'Bentham',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'berkshire-swash' =>
        array (
            'family' => 'Berkshire Swash',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'besley' =>
        array (
            'family' => 'Besley',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'beth-ellen' =>
        array (
            'family' => 'Beth Ellen',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bevan' =>
        array (
            'family' => 'Bevan',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'bhutuka-expanded-one' =>
        array (
            'family' => 'BhuTuka Expanded One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'big-shoulders-display' =>
        array (
            'family' => 'Big Shoulders Display',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'big-shoulders-inline-display' =>
        array (
            'family' => 'Big Shoulders Inline Display',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'big-shoulders-inline-text' =>
        array (
            'family' => 'Big Shoulders Inline Text',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'big-shoulders-stencil-display' =>
        array (
            'family' => 'Big Shoulders Stencil Display',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'big-shoulders-stencil-text' =>
        array (
            'family' => 'Big Shoulders Stencil Text',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'big-shoulders-text' =>
        array (
            'family' => 'Big Shoulders Text',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'bigelow-rules' =>
        array (
            'family' => 'Bigelow Rules',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bigshot-one' =>
        array (
            'family' => 'Bigshot One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bilbo' =>
        array (
            'family' => 'Bilbo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bilbo-swash-caps' =>
        array (
            'family' => 'Bilbo Swash Caps',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'biorhyme' =>
        array (
            'family' => 'BioRhyme',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'biorhyme-expanded' =>
        array (
            'family' => 'BioRhyme Expanded',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '800',
            ),
        ),
        'birthstone' =>
        array (
            'family' => 'Birthstone',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'birthstone-bounce' =>
        array (
            'family' => 'Birthstone Bounce',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            ),
        ),
        'biryani' =>
        array (
            'family' => 'Biryani',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'bitter' =>
        array (
            'family' => 'Bitter',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'black-and-white-picture' =>
        array (
            'family' => 'Black And White Picture',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'black-han-sans' =>
        array (
            'family' => 'Black Han Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'black-ops-one' =>
        array (
            'family' => 'Black Ops One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'blaka' =>
        array (
            'family' => 'Blaka',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'blaka-hollow' =>
        array (
            'family' => 'Blaka Hollow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'blaka-ink' =>
        array (
            'family' => 'Blaka Ink',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'blinker' =>
        array (
            'family' => 'Blinker',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'bodoni-moda' =>
        array (
            'family' => 'Bodoni Moda',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'bokor' =>
        array (
            'family' => 'Bokor',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bona-nova' =>
        array (
            'family' => 'Bona Nova',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'bonbon' =>
        array (
            'family' => 'Bonbon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bonheur-royale' =>
        array (
            'family' => 'Bonheur Royale',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'boogaloo' =>
        array (
            'family' => 'Boogaloo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'borel' =>
        array (
            'family' => 'Borel',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bowlby-one' =>
        array (
            'family' => 'Bowlby One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bowlby-one-sc' =>
        array (
            'family' => 'Bowlby One SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'braah-one' =>
        array (
            'family' => 'Braah One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'brawler' =>
        array (
            'family' => 'Brawler',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'bree-serif' =>
        array (
            'family' => 'Bree Serif',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bricolage-grotesque' =>
        array (
            'family' => 'Bricolage Grotesque',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'bruno-ace' =>
        array (
            'family' => 'Bruno Ace',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bruno-ace-sc' =>
        array (
            'family' => 'Bruno Ace SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'brygada-1918' =>
        array (
            'family' => 'Brygada 1918',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'bubblegum-sans' =>
        array (
            'family' => 'Bubblegum Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bubbler-one' =>
        array (
            'family' => 'Bubbler One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'buda' =>
        array (
            'family' => 'Buda',
            'variants' =>
            array (
            0 => '300',
            ),
        ),
        'buenard' =>
        array (
            'family' => 'Buenard',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'bungee' =>
        array (
            'family' => 'Bungee',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bungee-hairline' =>
        array (
            'family' => 'Bungee Hairline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bungee-inline' =>
        array (
            'family' => 'Bungee Inline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bungee-outline' =>
        array (
            'family' => 'Bungee Outline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bungee-shade' =>
        array (
            'family' => 'Bungee Shade',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'bungee-spice' =>
        array (
            'family' => 'Bungee Spice',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'butcherman' =>
        array (
            'family' => 'Butcherman',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'butterfly-kids' =>
        array (
            'family' => 'Butterfly Kids',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cabin' =>
        array (
            'family' => 'Cabin',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'cabin-condensed' =>
        array (
            'family' => 'Cabin Condensed',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'cabin-sketch' =>
        array (
            'family' => 'Cabin Sketch',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'caesar-dressing' =>
        array (
            'family' => 'Caesar Dressing',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cagliostro' =>
        array (
            'family' => 'Cagliostro',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cairo' =>
        array (
            'family' => 'Cairo',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'cairo-play' =>
        array (
            'family' => 'Cairo Play',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'caladea' =>
        array (
            'family' => 'Caladea',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'calistoga' =>
        array (
            'family' => 'Calistoga',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'calligraffitti' =>
        array (
            'family' => 'Calligraffitti',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cambay' =>
        array (
            'family' => 'Cambay',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'cambo' =>
        array (
            'family' => 'Cambo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'candal' =>
        array (
            'family' => 'Candal',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cantarell' =>
        array (
            'family' => 'Cantarell',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'cantata-one' =>
        array (
            'family' => 'Cantata One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cantora-one' =>
        array (
            'family' => 'Cantora One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'caprasimo' =>
        array (
            'family' => 'Caprasimo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'capriola' =>
        array (
            'family' => 'Capriola',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'caramel' =>
        array (
            'family' => 'Caramel',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'carattere' =>
        array (
            'family' => 'Carattere',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cardo' =>
        array (
            'family' => 'Cardo',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'carlito' =>
        array (
            'family' => 'Carlito',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'carme' =>
        array (
            'family' => 'Carme',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'carrois-gothic' =>
        array (
            'family' => 'Carrois Gothic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'carrois-gothic-sc' =>
        array (
            'family' => 'Carrois Gothic SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'carter-one' =>
        array (
            'family' => 'Carter One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'castoro' =>
        array (
            'family' => 'Castoro',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'castoro-titling' =>
        array (
            'family' => 'Castoro Titling',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'catamaran' =>
        array (
            'family' => 'Catamaran',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'caudex' =>
        array (
            'family' => 'Caudex',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'caveat' =>
        array (
            'family' => 'Caveat',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'caveat-brush' =>
        array (
            'family' => 'Caveat Brush',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cedarville-cursive' =>
        array (
            'family' => 'Cedarville Cursive',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ceviche-one' =>
        array (
            'family' => 'Ceviche One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chakra-petch' =>
        array (
            'family' => 'Chakra Petch',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'changa' =>
        array (
            'family' => 'Changa',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'changa-one' =>
        array (
            'family' => 'Changa One',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'chango' =>
        array (
            'family' => 'Chango',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'charis-sil' =>
        array (
            'family' => 'Charis SIL',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'charm' =>
        array (
            'family' => 'Charm',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'charmonman' =>
        array (
            'family' => 'Charmonman',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'chathura' =>
        array (
            'family' => 'Chathura',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '800',
            ),
        ),
        'chau-philomene-one' =>
        array (
            'family' => 'Chau Philomene One',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'chela-one' =>
        array (
            'family' => 'Chela One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chelsea-market' =>
        array (
            'family' => 'Chelsea Market',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chenla' =>
        array (
            'family' => 'Chenla',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cherish' =>
        array (
            'family' => 'Cherish',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cherry-bomb-one' =>
        array (
            'family' => 'Cherry Bomb One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cherry-cream-soda' =>
        array (
            'family' => 'Cherry Cream Soda',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cherry-swash' =>
        array (
            'family' => 'Cherry Swash',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'chewy' =>
        array (
            'family' => 'Chewy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chicle' =>
        array (
            'family' => 'Chicle',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chilanka' =>
        array (
            'family' => 'Chilanka',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chivo' =>
        array (
            'family' => 'Chivo',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'chivo-mono' =>
        array (
            'family' => 'Chivo Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'chokokutai' =>
        array (
            'family' => 'Chokokutai',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'chonburi' =>
        array (
            'family' => 'Chonburi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cinzel' =>
        array (
            'family' => 'Cinzel',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'cinzel-decorative' =>
        array (
            'family' => 'Cinzel Decorative',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '900',
            ),
        ),
        'clicker-script' =>
        array (
            'family' => 'Clicker Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'climate-crisis' =>
        array (
            'family' => 'Climate Crisis',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'coda' =>
        array (
            'family' => 'Coda',
            'variants' =>
            array (
            0 => 'regular',
            1 => '800',
            ),
        ),
        'codystar' =>
        array (
            'family' => 'Codystar',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            ),
        ),
        'coiny' =>
        array (
            'family' => 'Coiny',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'combo' =>
        array (
            'family' => 'Combo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'comfortaa' =>
        array (
            'family' => 'Comfortaa',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'comforter' =>
        array (
            'family' => 'Comforter',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'comforter-brush' =>
        array (
            'family' => 'Comforter Brush',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'comic-neue' =>
        array (
            'family' => 'Comic Neue',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'coming-soon' =>
        array (
            'family' => 'Coming Soon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'comme' =>
        array (
            'family' => 'Comme',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'commissioner' =>
        array (
            'family' => 'Commissioner',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'concert-one' =>
        array (
            'family' => 'Concert One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'condiment' =>
        array (
            'family' => 'Condiment',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'content' =>
        array (
            'family' => 'Content',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'contrail-one' =>
        array (
            'family' => 'Contrail One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'convergence' =>
        array (
            'family' => 'Convergence',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cookie' =>
        array (
            'family' => 'Cookie',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'copse' =>
        array (
            'family' => 'Copse',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'corben' =>
        array (
            'family' => 'Corben',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'corinthia' =>
        array (
            'family' => 'Corinthia',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'cormorant' =>
        array (
            'family' => 'Cormorant',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'cormorant-garamond' =>
        array (
            'family' => 'Cormorant Garamond',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'cormorant-infant' =>
        array (
            'family' => 'Cormorant Infant',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'cormorant-sc' =>
        array (
            'family' => 'Cormorant SC',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'cormorant-unicase' =>
        array (
            'family' => 'Cormorant Unicase',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'cormorant-upright' =>
        array (
            'family' => 'Cormorant Upright',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'courgette' =>
        array (
            'family' => 'Courgette',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'courier-prime' =>
        array (
            'family' => 'Courier Prime',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'cousine' =>
        array (
            'family' => 'Cousine',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'coustard' =>
        array (
            'family' => 'Coustard',
            'variants' =>
            array (
            0 => 'regular',
            1 => '900',
            ),
        ),
        'covered-by-your-grace' =>
        array (
            'family' => 'Covered By Your Grace',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'crafty-girls' =>
        array (
            'family' => 'Crafty Girls',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'creepster' =>
        array (
            'family' => 'Creepster',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'crete-round' =>
        array (
            'family' => 'Crete Round',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'crimson-pro' =>
        array (
            'family' => 'Crimson Pro',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'crimson-text' =>
        array (
            'family' => 'Crimson Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '600',
            3 => '600italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'croissant-one' =>
        array (
            'family' => 'Croissant One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'crushed' =>
        array (
            'family' => 'Crushed',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cuprum' =>
        array (
            'family' => 'Cuprum',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'cute-font' =>
        array (
            'family' => 'Cute Font',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cutive' =>
        array (
            'family' => 'Cutive',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'cutive-mono' =>
        array (
            'family' => 'Cutive Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dm-mono' =>
        array (
            'family' => 'DM Mono',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            ),
        ),
        'dm-sans' =>
        array (
            'family' => 'DM Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'dm-serif-display' =>
        array (
            'family' => 'DM Serif Display',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'dm-serif-text' =>
        array (
            'family' => 'DM Serif Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'dai-banna-sil' =>
        array (
            'family' => 'Dai Banna SIL',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'damion' =>
        array (
            'family' => 'Damion',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dancing-script' =>
        array (
            'family' => 'Dancing Script',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'dangrek' =>
        array (
            'family' => 'Dangrek',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'darker-grotesque' =>
        array (
            'family' => 'Darker Grotesque',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'darumadrop-one' =>
        array (
            'family' => 'Darumadrop One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'david-libre' =>
        array (
            'family' => 'David Libre',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'dawning-of-a-new-day' =>
        array (
            'family' => 'Dawning of a New Day',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'days-one' =>
        array (
            'family' => 'Days One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dekko' =>
        array (
            'family' => 'Dekko',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dela-gothic-one' =>
        array (
            'family' => 'Dela Gothic One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'delicious-handrawn' =>
        array (
            'family' => 'Delicious Handrawn',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'delius' =>
        array (
            'family' => 'Delius',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'delius-swash-caps' =>
        array (
            'family' => 'Delius Swash Caps',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'delius-unicase' =>
        array (
            'family' => 'Delius Unicase',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'della-respira' =>
        array (
            'family' => 'Della Respira',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'denk-one' =>
        array (
            'family' => 'Denk One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'devonshire' =>
        array (
            'family' => 'Devonshire',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dhurjati' =>
        array (
            'family' => 'Dhurjati',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'didact-gothic' =>
        array (
            'family' => 'Didact Gothic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'diphylleia' =>
        array (
            'family' => 'Diphylleia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'diplomata' =>
        array (
            'family' => 'Diplomata',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'diplomata-sc' =>
        array (
            'family' => 'Diplomata SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'do-hyeon' =>
        array (
            'family' => 'Do Hyeon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dokdo' =>
        array (
            'family' => 'Dokdo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'domine' =>
        array (
            'family' => 'Domine',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'donegal-one' =>
        array (
            'family' => 'Donegal One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dongle' =>
        array (
            'family' => 'Dongle',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'doppio-one' =>
        array (
            'family' => 'Doppio One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dorsa' =>
        array (
            'family' => 'Dorsa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dosis' =>
        array (
            'family' => 'Dosis',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'dotgothic16' =>
        array (
            'family' => 'DotGothic16',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dr-sugiyama' =>
        array (
            'family' => 'Dr Sugiyama',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'duru-sans' =>
        array (
            'family' => 'Duru Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'dynapuff' =>
        array (
            'family' => 'DynaPuff',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'dynalight' =>
        array (
            'family' => 'Dynalight',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'eb-garamond' =>
        array (
            'family' => 'EB Garamond',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => 'italic',
            6 => '500italic',
            7 => '600italic',
            8 => '700italic',
            9 => '800italic',
            ),
        ),
        'eagle-lake' =>
        array (
            'family' => 'Eagle Lake',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'east-sea-dokdo' =>
        array (
            'family' => 'East Sea Dokdo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'eater' =>
        array (
            'family' => 'Eater',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'economica' =>
        array (
            'family' => 'Economica',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'eczar' =>
        array (
            'family' => 'Eczar',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'edu-nsw-act-foundation' =>
        array (
            'family' => 'Edu NSW ACT Foundation',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'edu-qld-beginner' =>
        array (
            'family' => 'Edu QLD Beginner',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'edu-sa-beginner' =>
        array (
            'family' => 'Edu SA Beginner',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'edu-tas-beginner' =>
        array (
            'family' => 'Edu TAS Beginner',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'edu-vic-wa-nt-beginner' =>
        array (
            'family' => 'Edu VIC WA NT Beginner',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'el-messiri' =>
        array (
            'family' => 'El Messiri',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'electrolize' =>
        array (
            'family' => 'Electrolize',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'elsie' =>
        array (
            'family' => 'Elsie',
            'variants' =>
            array (
            0 => 'regular',
            1 => '900',
            ),
        ),
        'elsie-swash-caps' =>
        array (
            'family' => 'Elsie Swash Caps',
            'variants' =>
            array (
            0 => 'regular',
            1 => '900',
            ),
        ),
        'emblema-one' =>
        array (
            'family' => 'Emblema One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'emilys-candy' =>
        array (
            'family' => 'Emilys Candy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'encode-sans' =>
        array (
            'family' => 'Encode Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'encode-sans-condensed' =>
        array (
            'family' => 'Encode Sans Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'encode-sans-expanded' =>
        array (
            'family' => 'Encode Sans Expanded',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'encode-sans-sc' =>
        array (
            'family' => 'Encode Sans SC',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'encode-sans-semi-condensed' =>
        array (
            'family' => 'Encode Sans Semi Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'encode-sans-semi-expanded' =>
        array (
            'family' => 'Encode Sans Semi Expanded',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'engagement' =>
        array (
            'family' => 'Engagement',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'englebert' =>
        array (
            'family' => 'Englebert',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'enriqueta' =>
        array (
            'family' => 'Enriqueta',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'ephesis' =>
        array (
            'family' => 'Ephesis',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'epilogue' =>
        array (
            'family' => 'Epilogue',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'erica-one' =>
        array (
            'family' => 'Erica One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'esteban' =>
        array (
            'family' => 'Esteban',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'estonia' =>
        array (
            'family' => 'Estonia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'euphoria-script' =>
        array (
            'family' => 'Euphoria Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ewert' =>
        array (
            'family' => 'Ewert',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'exo' =>
        array (
            'family' => 'Exo',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'exo-2' =>
        array (
            'family' => 'Exo 2',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'expletus-sans' =>
        array (
            'family' => 'Expletus Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'explora' =>
        array (
            'family' => 'Explora',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fahkwang' =>
        array (
            'family' => 'Fahkwang',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'familjen-grotesk' =>
        array (
            'family' => 'Familjen Grotesk',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'fanwood-text' =>
        array (
            'family' => 'Fanwood Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'farro' =>
        array (
            'family' => 'Farro',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '700',
            ),
        ),
        'farsan' =>
        array (
            'family' => 'Farsan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fascinate' =>
        array (
            'family' => 'Fascinate',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fascinate-inline' =>
        array (
            'family' => 'Fascinate Inline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'faster-one' =>
        array (
            'family' => 'Faster One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fasthand' =>
        array (
            'family' => 'Fasthand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fauna-one' =>
        array (
            'family' => 'Fauna One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'faustina' =>
        array (
            'family' => 'Faustina',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '300italic',
            7 => 'italic',
            8 => '500italic',
            9 => '600italic',
            10 => '700italic',
            11 => '800italic',
            ),
        ),
        'federant' =>
        array (
            'family' => 'Federant',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'federo' =>
        array (
            'family' => 'Federo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'felipa' =>
        array (
            'family' => 'Felipa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fenix' =>
        array (
            'family' => 'Fenix',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'festive' =>
        array (
            'family' => 'Festive',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'figtree' =>
        array (
            'family' => 'Figtree',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            7 => '300italic',
            8 => 'italic',
            9 => '500italic',
            10 => '600italic',
            11 => '700italic',
            12 => '800italic',
            13 => '900italic',
            ),
        ),
        'finger-paint' =>
        array (
            'family' => 'Finger Paint',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'finlandica' =>
        array (
            'family' => 'Finlandica',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'fira-code' =>
        array (
            'family' => 'Fira Code',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'fira-mono' =>
        array (
            'family' => 'Fira Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'fira-sans' =>
        array (
            'family' => 'Fira Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'fira-sans-condensed' =>
        array (
            'family' => 'Fira Sans Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'fira-sans-extra-condensed' =>
        array (
            'family' => 'Fira Sans Extra Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'fjalla-one' =>
        array (
            'family' => 'Fjalla One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fjord-one' =>
        array (
            'family' => 'Fjord One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'flamenco' =>
        array (
            'family' => 'Flamenco',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            ),
        ),
        'flavors' =>
        array (
            'family' => 'Flavors',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fleur-de-leah' =>
        array (
            'family' => 'Fleur De Leah',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'flow-block' =>
        array (
            'family' => 'Flow Block',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'flow-circular' =>
        array (
            'family' => 'Flow Circular',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'flow-rounded' =>
        array (
            'family' => 'Flow Rounded',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'foldit' =>
        array (
            'family' => 'Foldit',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'fondamento' =>
        array (
            'family' => 'Fondamento',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'fontdiner-swanky' =>
        array (
            'family' => 'Fontdiner Swanky',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'forum' =>
        array (
            'family' => 'Forum',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fragment-mono' =>
        array (
            'family' => 'Fragment Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'francois-one' =>
        array (
            'family' => 'Francois One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'frank-ruhl-libre' =>
        array (
            'family' => 'Frank Ruhl Libre',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'fraunces' =>
        array (
            'family' => 'Fraunces',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'freckle-face' =>
        array (
            'family' => 'Freckle Face',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fredericka-the-great' =>
        array (
            'family' => 'Fredericka the Great',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fredoka' =>
        array (
            'family' => 'Fredoka',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'freehand' =>
        array (
            'family' => 'Freehand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fresca' =>
        array (
            'family' => 'Fresca',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'frijole' =>
        array (
            'family' => 'Frijole',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fruktur' =>
        array (
            'family' => 'Fruktur',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'fugaz-one' =>
        array (
            'family' => 'Fugaz One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fuggles' =>
        array (
            'family' => 'Fuggles',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'fuzzy-bubbles' =>
        array (
            'family' => 'Fuzzy Bubbles',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'gfs-didot' =>
        array (
            'family' => 'GFS Didot',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gfs-neohellenic' =>
        array (
            'family' => 'GFS Neohellenic',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'gabarito' =>
        array (
            'family' => 'Gabarito',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'gabriela' =>
        array (
            'family' => 'Gabriela',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gaegu' =>
        array (
            'family' => 'Gaegu',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'gafata' =>
        array (
            'family' => 'Gafata',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gajraj-one' =>
        array (
            'family' => 'Gajraj One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'galada' =>
        array (
            'family' => 'Galada',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'galdeano' =>
        array (
            'family' => 'Galdeano',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'galindo' =>
        array (
            'family' => 'Galindo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gamja-flower' =>
        array (
            'family' => 'Gamja Flower',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gantari' =>
        array (
            'family' => 'Gantari',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'gasoek-one' =>
        array (
            'family' => 'Gasoek One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gayathri' =>
        array (
            'family' => 'Gayathri',
            'variants' =>
            array (
            0 => '100',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'gelasio' =>
        array (
            'family' => 'Gelasio',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '500',
            3 => '500italic',
            4 => '600',
            5 => '600italic',
            6 => '700',
            7 => '700italic',
            ),
        ),
        'gemunu-libre' =>
        array (
            'family' => 'Gemunu Libre',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'genos' =>
        array (
            'family' => 'Genos',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'gentium-book-plus' =>
        array (
            'family' => 'Gentium Book Plus',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'gentium-plus' =>
        array (
            'family' => 'Gentium Plus',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'geo' =>
        array (
            'family' => 'Geo',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'geologica' =>
        array (
            'family' => 'Geologica',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'georama' =>
        array (
            'family' => 'Georama',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'geostar' =>
        array (
            'family' => 'Geostar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'geostar-fill' =>
        array (
            'family' => 'Geostar Fill',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'germania-one' =>
        array (
            'family' => 'Germania One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gideon-roman' =>
        array (
            'family' => 'Gideon Roman',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gidugu' =>
        array (
            'family' => 'Gidugu',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gilda-display' =>
        array (
            'family' => 'Gilda Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'girassol' =>
        array (
            'family' => 'Girassol',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'give-you-glory' =>
        array (
            'family' => 'Give You Glory',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'glass-antiqua' =>
        array (
            'family' => 'Glass Antiqua',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'glegoo' =>
        array (
            'family' => 'Glegoo',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'gloock' =>
        array (
            'family' => 'Gloock',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gloria-hallelujah' =>
        array (
            'family' => 'Gloria Hallelujah',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'glory' =>
        array (
            'family' => 'Glory',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '100italic',
            9 => '200italic',
            10 => '300italic',
            11 => 'italic',
            12 => '500italic',
            13 => '600italic',
            14 => '700italic',
            15 => '800italic',
            ),
        ),
        'gluten' =>
        array (
            'family' => 'Gluten',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'goblin-one' =>
        array (
            'family' => 'Goblin One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gochi-hand' =>
        array (
            'family' => 'Gochi Hand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'goldman' =>
        array (
            'family' => 'Goldman',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'golos-text' =>
        array (
            'family' => 'Golos Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'gorditas' =>
        array (
            'family' => 'Gorditas',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'gothic-a1' =>
        array (
            'family' => 'Gothic A1',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'gotu' =>
        array (
            'family' => 'Gotu',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'goudy-bookletter-1911' =>
        array (
            'family' => 'Goudy Bookletter 1911',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gowun-batang' =>
        array (
            'family' => 'Gowun Batang',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'gowun-dodum' =>
        array (
            'family' => 'Gowun Dodum',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'graduate' =>
        array (
            'family' => 'Graduate',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'grand-hotel' =>
        array (
            'family' => 'Grand Hotel',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'grandiflora-one' =>
        array (
            'family' => 'Grandiflora One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'grandstander' =>
        array (
            'family' => 'Grandstander',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'grape-nuts' =>
        array (
            'family' => 'Grape Nuts',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gravitas-one' =>
        array (
            'family' => 'Gravitas One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'great-vibes' =>
        array (
            'family' => 'Great Vibes',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'grechen-fuemen' =>
        array (
            'family' => 'Grechen Fuemen',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'grenze' =>
        array (
            'family' => 'Grenze',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'grenze-gotisch' =>
        array (
            'family' => 'Grenze Gotisch',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'grey-qo' =>
        array (
            'family' => 'Grey Qo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'griffy' =>
        array (
            'family' => 'Griffy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gruppo' =>
        array (
            'family' => 'Gruppo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gudea' =>
        array (
            'family' => 'Gudea',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'gugi' =>
        array (
            'family' => 'Gugi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gulzar' =>
        array (
            'family' => 'Gulzar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gupter' =>
        array (
            'family' => 'Gupter',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'gurajada' =>
        array (
            'family' => 'Gurajada',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'gwendolyn' =>
        array (
            'family' => 'Gwendolyn',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'habibi' =>
        array (
            'family' => 'Habibi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hachi-maru-pop' =>
        array (
            'family' => 'Hachi Maru Pop',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hahmlet' =>
        array (
            'family' => 'Hahmlet',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'halant' =>
        array (
            'family' => 'Halant',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'hammersmith-one' =>
        array (
            'family' => 'Hammersmith One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hanalei' =>
        array (
            'family' => 'Hanalei',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hanalei-fill' =>
        array (
            'family' => 'Hanalei Fill',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'handjet' =>
        array (
            'family' => 'Handjet',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'handlee' =>
        array (
            'family' => 'Handlee',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hanken-grotesk' =>
        array (
            'family' => 'Hanken Grotesk',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'hanuman' =>
        array (
            'family' => 'Hanuman',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '900',
            ),
        ),
        'happy-monkey' =>
        array (
            'family' => 'Happy Monkey',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'harmattan' =>
        array (
            'family' => 'Harmattan',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'headland-one' =>
        array (
            'family' => 'Headland One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hedvig-letters-sans' =>
        array (
            'family' => 'Hedvig Letters Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hedvig-letters-serif' =>
        array (
            'family' => 'Hedvig Letters Serif',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'heebo' =>
        array (
            'family' => 'Heebo',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'henny-penny' =>
        array (
            'family' => 'Henny Penny',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hepta-slab' =>
        array (
            'family' => 'Hepta Slab',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'herr-von-muellerhoff' =>
        array (
            'family' => 'Herr Von Muellerhoff',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hi-melody' =>
        array (
            'family' => 'Hi Melody',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hina-mincho' =>
        array (
            'family' => 'Hina Mincho',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hind' =>
        array (
            'family' => 'Hind',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'hind-guntur' =>
        array (
            'family' => 'Hind Guntur',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'hind-madurai' =>
        array (
            'family' => 'Hind Madurai',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'hind-siliguri' =>
        array (
            'family' => 'Hind Siliguri',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'hind-vadodara' =>
        array (
            'family' => 'Hind Vadodara',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'holtwood-one-sc' =>
        array (
            'family' => 'Holtwood One SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'homemade-apple' =>
        array (
            'family' => 'Homemade Apple',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'homenaje' =>
        array (
            'family' => 'Homenaje',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'honk' =>
        array (
            'family' => 'Honk',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hubballi' =>
        array (
            'family' => 'Hubballi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'hurricane' =>
        array (
            'family' => 'Hurricane',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ibm-plex-mono' =>
        array (
            'family' => 'IBM Plex Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            ),
        ),
        'ibm-plex-sans' =>
        array (
            'family' => 'IBM Plex Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            ),
        ),
        'ibm-plex-sans-arabic' =>
        array (
            'family' => 'IBM Plex Sans Arabic',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-condensed' =>
        array (
            'family' => 'IBM Plex Sans Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            ),
        ),
        'ibm-plex-sans-devanagari' =>
        array (
            'family' => 'IBM Plex Sans Devanagari',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-hebrew' =>
        array (
            'family' => 'IBM Plex Sans Hebrew',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-jp' =>
        array (
            'family' => 'IBM Plex Sans JP',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-kr' =>
        array (
            'family' => 'IBM Plex Sans KR',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-thai' =>
        array (
            'family' => 'IBM Plex Sans Thai',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-sans-thai-looped' =>
        array (
            'family' => 'IBM Plex Sans Thai Looped',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'ibm-plex-serif' =>
        array (
            'family' => 'IBM Plex Serif',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            ),
        ),
        'im-fell-dw-pica' =>
        array (
            'family' => 'IM Fell DW Pica',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'im-fell-dw-pica-sc' =>
        array (
            'family' => 'IM Fell DW Pica SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'im-fell-double-pica' =>
        array (
            'family' => 'IM Fell Double Pica',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'im-fell-double-pica-sc' =>
        array (
            'family' => 'IM Fell Double Pica SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'im-fell-english' =>
        array (
            'family' => 'IM Fell English',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'im-fell-english-sc' =>
        array (
            'family' => 'IM Fell English SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'im-fell-french-canon' =>
        array (
            'family' => 'IM Fell French Canon',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'im-fell-french-canon-sc' =>
        array (
            'family' => 'IM Fell French Canon SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'im-fell-great-primer' =>
        array (
            'family' => 'IM Fell Great Primer',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'im-fell-great-primer-sc' =>
        array (
            'family' => 'IM Fell Great Primer SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ibarra-real-nova' =>
        array (
            'family' => 'Ibarra Real Nova',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'iceberg' =>
        array (
            'family' => 'Iceberg',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'iceland' =>
        array (
            'family' => 'Iceland',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'imbue' =>
        array (
            'family' => 'Imbue',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'imperial-script' =>
        array (
            'family' => 'Imperial Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'imprima' =>
        array (
            'family' => 'Imprima',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'inclusive-sans' =>
        array (
            'family' => 'Inclusive Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'inconsolata' =>
        array (
            'family' => 'Inconsolata',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'inder' =>
        array (
            'family' => 'Inder',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'indie-flower' =>
        array (
            'family' => 'Indie Flower',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ingrid-darling' =>
        array (
            'family' => 'Ingrid Darling',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'inika' =>
        array (
            'family' => 'Inika',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'inknut-antiqua' =>
        array (
            'family' => 'Inknut Antiqua',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'inria-sans' =>
        array (
            'family' => 'Inria Sans',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'inria-serif' =>
        array (
            'family' => 'Inria Serif',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'inspiration' =>
        array (
            'family' => 'Inspiration',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'instrument-sans' =>
        array (
            'family' => 'Instrument Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'instrument-serif' =>
        array (
            'family' => 'Instrument Serif',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'inter' =>
        array (
            'family' => 'Inter',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'inter-tight' =>
        array (
            'family' => 'Inter Tight',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'irish-grover' =>
        array (
            'family' => 'Irish Grover',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'island-moments' =>
        array (
            'family' => 'Island Moments',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'istok-web' =>
        array (
            'family' => 'Istok Web',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'italiana' =>
        array (
            'family' => 'Italiana',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'italianno' =>
        array (
            'family' => 'Italianno',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'itim' =>
        array (
            'family' => 'Itim',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jacquarda-bastarda-9' =>
        array (
            'family' => 'Jacquarda Bastarda 9',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jacques-francois' =>
        array (
            'family' => 'Jacques Francois',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jacques-francois-shadow' =>
        array (
            'family' => 'Jacques Francois Shadow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jaldi' =>
        array (
            'family' => 'Jaldi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'jetbrains-mono' =>
        array (
            'family' => 'JetBrains Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '100italic',
            9 => '200italic',
            10 => '300italic',
            11 => 'italic',
            12 => '500italic',
            13 => '600italic',
            14 => '700italic',
            15 => '800italic',
            ),
        ),
        'jim-nightshade' =>
        array (
            'family' => 'Jim Nightshade',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'joan' =>
        array (
            'family' => 'Joan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jockey-one' =>
        array (
            'family' => 'Jockey One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jolly-lodger' =>
        array (
            'family' => 'Jolly Lodger',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jomhuria' =>
        array (
            'family' => 'Jomhuria',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jomolhari' =>
        array (
            'family' => 'Jomolhari',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'josefin-sans' =>
        array (
            'family' => 'Josefin Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '100italic',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            ),
        ),
        'josefin-slab' =>
        array (
            'family' => 'Josefin Slab',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '100italic',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            ),
        ),
        'jost' =>
        array (
            'family' => 'Jost',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'joti-one' =>
        array (
            'family' => 'Joti One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jua' =>
        array (
            'family' => 'Jua',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'judson' =>
        array (
            'family' => 'Judson',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'julee' =>
        array (
            'family' => 'Julee',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'julius-sans-one' =>
        array (
            'family' => 'Julius Sans One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'junge' =>
        array (
            'family' => 'Junge',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'jura' =>
        array (
            'family' => 'Jura',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'just-another-hand' =>
        array (
            'family' => 'Just Another Hand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'just-me-again-down-here' =>
        array (
            'family' => 'Just Me Again Down Here',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'k2d' =>
        array (
            'family' => 'K2D',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            ),
        ),
        'kablammo' =>
        array (
            'family' => 'Kablammo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kadwa' =>
        array (
            'family' => 'Kadwa',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'kaisei-decol' =>
        array (
            'family' => 'Kaisei Decol',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'kaisei-harunoumi' =>
        array (
            'family' => 'Kaisei HarunoUmi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'kaisei-opti' =>
        array (
            'family' => 'Kaisei Opti',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            ),
        ),
        'kaisei-tokumin' =>
        array (
            'family' => 'Kaisei Tokumin',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            3 => '800',
            ),
        ),
        'kalam' =>
        array (
            'family' => 'Kalam',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'kalnia' =>
        array (
            'family' => 'Kalnia',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'kameron' =>
        array (
            'family' => 'Kameron',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'kanit' =>
        array (
            'family' => 'Kanit',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'kantumruy-pro' =>
        array (
            'family' => 'Kantumruy Pro',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '100italic',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            ),
        ),
        'karantina' =>
        array (
            'family' => 'Karantina',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'karla' =>
        array (
            'family' => 'Karla',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '200italic',
            8 => '300italic',
            9 => 'italic',
            10 => '500italic',
            11 => '600italic',
            12 => '700italic',
            13 => '800italic',
            ),
        ),
        'karma' =>
        array (
            'family' => 'Karma',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'katibeh' =>
        array (
            'family' => 'Katibeh',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kaushan-script' =>
        array (
            'family' => 'Kaushan Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kavivanar' =>
        array (
            'family' => 'Kavivanar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kavoon' =>
        array (
            'family' => 'Kavoon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kay-pho-du' =>
        array (
            'family' => 'Kay Pho Du',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'kdam-thmor-pro' =>
        array (
            'family' => 'Kdam Thmor Pro',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'keania-one' =>
        array (
            'family' => 'Keania One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kelly-slab' =>
        array (
            'family' => 'Kelly Slab',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kenia' =>
        array (
            'family' => 'Kenia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'khand' =>
        array (
            'family' => 'Khand',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'khmer' =>
        array (
            'family' => 'Khmer',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'khula' =>
        array (
            'family' => 'Khula',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'kings' =>
        array (
            'family' => 'Kings',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kirang-haerang' =>
        array (
            'family' => 'Kirang Haerang',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kite-one' =>
        array (
            'family' => 'Kite One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kiwi-maru' =>
        array (
            'family' => 'Kiwi Maru',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            ),
        ),
        'klee-one' =>
        array (
            'family' => 'Klee One',
            'variants' =>
            array (
            0 => 'regular',
            1 => '600',
            ),
        ),
        'knewave' =>
        array (
            'family' => 'Knewave',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'koho' =>
        array (
            'family' => 'KoHo',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'kodchasan' =>
        array (
            'family' => 'Kodchasan',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'kode-mono' =>
        array (
            'family' => 'Kode Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'koh-santepheap' =>
        array (
            'family' => 'Koh Santepheap',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '900',
            ),
        ),
        'kolker-brush' =>
        array (
            'family' => 'Kolker Brush',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'konkhmer-sleokchher' =>
        array (
            'family' => 'Konkhmer Sleokchher',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kosugi' =>
        array (
            'family' => 'Kosugi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kosugi-maru' =>
        array (
            'family' => 'Kosugi Maru',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kotta-one' =>
        array (
            'family' => 'Kotta One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'koulen' =>
        array (
            'family' => 'Koulen',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kranky' =>
        array (
            'family' => 'Kranky',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kreon' =>
        array (
            'family' => 'Kreon',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'kristi' =>
        array (
            'family' => 'Kristi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'krona-one' =>
        array (
            'family' => 'Krona One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'krub' =>
        array (
            'family' => 'Krub',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'kufam' =>
        array (
            'family' => 'Kufam',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'kulim-park' =>
        array (
            'family' => 'Kulim Park',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'kumar-one' =>
        array (
            'family' => 'Kumar One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kumar-one-outline' =>
        array (
            'family' => 'Kumar One Outline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'kumbh-sans' =>
        array (
            'family' => 'Kumbh Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'kurale' =>
        array (
            'family' => 'Kurale',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'la-belle-aurore' =>
        array (
            'family' => 'La Belle Aurore',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'labrada' =>
        array (
            'family' => 'Labrada',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'lacquer' =>
        array (
            'family' => 'Lacquer',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'laila' =>
        array (
            'family' => 'Laila',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'lakki-reddy' =>
        array (
            'family' => 'Lakki Reddy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lalezar' =>
        array (
            'family' => 'Lalezar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lancelot' =>
        array (
            'family' => 'Lancelot',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'langar' =>
        array (
            'family' => 'Langar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lateef' =>
        array (
            'family' => 'Lateef',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'lato' =>
        array (
            'family' => 'Lato',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '700',
            7 => '700italic',
            8 => '900',
            9 => '900italic',
            ),
        ),
        'lavishly-yours' =>
        array (
            'family' => 'Lavishly Yours',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'league-gothic' =>
        array (
            'family' => 'League Gothic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'league-script' =>
        array (
            'family' => 'League Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'league-spartan' =>
        array (
            'family' => 'League Spartan',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'leckerli-one' =>
        array (
            'family' => 'Leckerli One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ledger' =>
        array (
            'family' => 'Ledger',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lekton' =>
        array (
            'family' => 'Lekton',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'lemon' =>
        array (
            'family' => 'Lemon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lemonada' =>
        array (
            'family' => 'Lemonada',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'lexend' =>
        array (
            'family' => 'Lexend',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-deca' =>
        array (
            'family' => 'Lexend Deca',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-exa' =>
        array (
            'family' => 'Lexend Exa',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-giga' =>
        array (
            'family' => 'Lexend Giga',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-mega' =>
        array (
            'family' => 'Lexend Mega',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-peta' =>
        array (
            'family' => 'Lexend Peta',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-tera' =>
        array (
            'family' => 'Lexend Tera',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lexend-zetta' =>
        array (
            'family' => 'Lexend Zetta',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'libre-barcode-128' =>
        array (
            'family' => 'Libre Barcode 128',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-128-text' =>
        array (
            'family' => 'Libre Barcode 128 Text',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-39' =>
        array (
            'family' => 'Libre Barcode 39',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-39-extended' =>
        array (
            'family' => 'Libre Barcode 39 Extended',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-39-extended-text' =>
        array (
            'family' => 'Libre Barcode 39 Extended Text',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-39-text' =>
        array (
            'family' => 'Libre Barcode 39 Text',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-barcode-ean13-text' =>
        array (
            'family' => 'Libre Barcode EAN13 Text',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-baskerville' =>
        array (
            'family' => 'Libre Baskerville',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'libre-bodoni' =>
        array (
            'family' => 'Libre Bodoni',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'libre-caslon-display' =>
        array (
            'family' => 'Libre Caslon Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'libre-caslon-text' =>
        array (
            'family' => 'Libre Caslon Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'libre-franklin' =>
        array (
            'family' => 'Libre Franklin',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'licorice' =>
        array (
            'family' => 'Licorice',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'life-savers' =>
        array (
            'family' => 'Life Savers',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '800',
            ),
        ),
        'lilita-one' =>
        array (
            'family' => 'Lilita One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lily-script-one' =>
        array (
            'family' => 'Lily Script One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'limelight' =>
        array (
            'family' => 'Limelight',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'linden-hill' =>
        array (
            'family' => 'Linden Hill',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'linefont' =>
        array (
            'family' => 'Linefont',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'lisu-bosa' =>
        array (
            'family' => 'Lisu Bosa',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            12 => '800',
            13 => '800italic',
            14 => '900',
            15 => '900italic',
            ),
        ),
        'literata' =>
        array (
            'family' => 'Literata',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'liu-jian-mao-cao' =>
        array (
            'family' => 'Liu Jian Mao Cao',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'livvic' =>
        array (
            'family' => 'Livvic',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '900',
            15 => '900italic',
            ),
        ),
        'lobster' =>
        array (
            'family' => 'Lobster',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lobster-two' =>
        array (
            'family' => 'Lobster Two',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'londrina-outline' =>
        array (
            'family' => 'Londrina Outline',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'londrina-shadow' =>
        array (
            'family' => 'Londrina Shadow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'londrina-sketch' =>
        array (
            'family' => 'Londrina Sketch',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'londrina-solid' =>
        array (
            'family' => 'Londrina Solid',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '900',
            ),
        ),
        'long-cang' =>
        array (
            'family' => 'Long Cang',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lora' =>
        array (
            'family' => 'Lora',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'love-light' =>
        array (
            'family' => 'Love Light',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'love-ya-like-a-sister' =>
        array (
            'family' => 'Love Ya Like A Sister',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'loved-by-the-king' =>
        array (
            'family' => 'Loved by the King',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lovers-quarrel' =>
        array (
            'family' => 'Lovers Quarrel',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'luckiest-guy' =>
        array (
            'family' => 'Luckiest Guy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lugrasimo' =>
        array (
            'family' => 'Lugrasimo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lumanosimo' =>
        array (
            'family' => 'Lumanosimo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'lunasima' =>
        array (
            'family' => 'Lunasima',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'lusitana' =>
        array (
            'family' => 'Lusitana',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'lustria' =>
        array (
            'family' => 'Lustria',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'luxurious-roman' =>
        array (
            'family' => 'Luxurious Roman',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'luxurious-script' =>
        array (
            'family' => 'Luxurious Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'm-plus-1' =>
        array (
            'family' => 'M PLUS 1',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'm-plus-1-code' =>
        array (
            'family' => 'M PLUS 1 Code',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'm-plus-1p' =>
        array (
            'family' => 'M PLUS 1p',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'm-plus-2' =>
        array (
            'family' => 'M PLUS 2',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'm-plus-code-latin' =>
        array (
            'family' => 'M PLUS Code Latin',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'm-plus-rounded-1c' =>
        array (
            'family' => 'M PLUS Rounded 1c',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'ma-shan-zheng' =>
        array (
            'family' => 'Ma Shan Zheng',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'macondo' =>
        array (
            'family' => 'Macondo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'macondo-swash-caps' =>
        array (
            'family' => 'Macondo Swash Caps',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mada' =>
        array (
            'family' => 'Mada',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'madimi-one' =>
        array (
            'family' => 'Madimi One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'magra' =>
        array (
            'family' => 'Magra',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'maiden-orange' =>
        array (
            'family' => 'Maiden Orange',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'maitree' =>
        array (
            'family' => 'Maitree',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'major-mono-display' =>
        array (
            'family' => 'Major Mono Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mako' =>
        array (
            'family' => 'Mako',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mali' =>
        array (
            'family' => 'Mali',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'mallanna' =>
        array (
            'family' => 'Mallanna',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mandali' =>
        array (
            'family' => 'Mandali',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'manjari' =>
        array (
            'family' => 'Manjari',
            'variants' =>
            array (
            0 => '100',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'manrope' =>
        array (
            'family' => 'Manrope',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'mansalva' =>
        array (
            'family' => 'Mansalva',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'manuale' =>
        array (
            'family' => 'Manuale',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '300italic',
            7 => 'italic',
            8 => '500italic',
            9 => '600italic',
            10 => '700italic',
            11 => '800italic',
            ),
        ),
        'marcellus' =>
        array (
            'family' => 'Marcellus',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'marcellus-sc' =>
        array (
            'family' => 'Marcellus SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'marck-script' =>
        array (
            'family' => 'Marck Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'margarine' =>
        array (
            'family' => 'Margarine',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'marhey' =>
        array (
            'family' => 'Marhey',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'markazi-text' =>
        array (
            'family' => 'Markazi Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'marko-one' =>
        array (
            'family' => 'Marko One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'marmelad' =>
        array (
            'family' => 'Marmelad',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'martel' =>
        array (
            'family' => 'Martel',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'martel-sans' =>
        array (
            'family' => 'Martel Sans',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'martian-mono' =>
        array (
            'family' => 'Martian Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'marvel' =>
        array (
            'family' => 'Marvel',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'mate' =>
        array (
            'family' => 'Mate',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'mate-sc' =>
        array (
            'family' => 'Mate SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-icons' =>
        array (
            'family' => 'Material Icons',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-icons-outlined' =>
        array (
            'family' => 'Material Icons Outlined',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-icons-round' =>
        array (
            'family' => 'Material Icons Round',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-icons-sharp' =>
        array (
            'family' => 'Material Icons Sharp',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-icons-two-tone' =>
        array (
            'family' => 'Material Icons Two Tone',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'material-symbols-outlined' =>
        array (
            'family' => 'Material Symbols Outlined',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'material-symbols-rounded' =>
        array (
            'family' => 'Material Symbols Rounded',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'material-symbols-sharp' =>
        array (
            'family' => 'Material Symbols Sharp',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'maven-pro' =>
        array (
            'family' => 'Maven Pro',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'mclaren' =>
        array (
            'family' => 'McLaren',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mea-culpa' =>
        array (
            'family' => 'Mea Culpa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'meddon' =>
        array (
            'family' => 'Meddon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'medievalsharp' =>
        array (
            'family' => 'MedievalSharp',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'medula-one' =>
        array (
            'family' => 'Medula One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'meera-inimai' =>
        array (
            'family' => 'Meera Inimai',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'megrim' =>
        array (
            'family' => 'Megrim',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'meie-script' =>
        array (
            'family' => 'Meie Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'meow-script' =>
        array (
            'family' => 'Meow Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'merienda' =>
        array (
            'family' => 'Merienda',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'merriweather' =>
        array (
            'family' => 'Merriweather',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '700italic',
            6 => '900',
            7 => '900italic',
            ),
        ),
        'merriweather-sans' =>
        array (
            'family' => 'Merriweather Sans',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '300italic',
            7 => 'italic',
            8 => '500italic',
            9 => '600italic',
            10 => '700italic',
            11 => '800italic',
            ),
        ),
        'metal' =>
        array (
            'family' => 'Metal',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'metal-mania' =>
        array (
            'family' => 'Metal Mania',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'metamorphous' =>
        array (
            'family' => 'Metamorphous',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'metrophobic' =>
        array (
            'family' => 'Metrophobic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'michroma' =>
        array (
            'family' => 'Michroma',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'micro-5' =>
        array (
            'family' => 'Micro 5',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'milonga' =>
        array (
            'family' => 'Milonga',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'miltonian' =>
        array (
            'family' => 'Miltonian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'miltonian-tattoo' =>
        array (
            'family' => 'Miltonian Tattoo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mina' =>
        array (
            'family' => 'Mina',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'mingzat' =>
        array (
            'family' => 'Mingzat',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'miniver' =>
        array (
            'family' => 'Miniver',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'miriam-libre' =>
        array (
            'family' => 'Miriam Libre',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'mirza' =>
        array (
            'family' => 'Mirza',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'miss-fajardose' =>
        array (
            'family' => 'Miss Fajardose',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mitr' =>
        array (
            'family' => 'Mitr',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'mochiy-pop-one' =>
        array (
            'family' => 'Mochiy Pop One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mochiy-pop-p-one' =>
        array (
            'family' => 'Mochiy Pop P One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'modak' =>
        array (
            'family' => 'Modak',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'modern-antiqua' =>
        array (
            'family' => 'Modern Antiqua',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mogra' =>
        array (
            'family' => 'Mogra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mohave' =>
        array (
            'family' => 'Mohave',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'moirai-one' =>
        array (
            'family' => 'Moirai One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'molengo' =>
        array (
            'family' => 'Molengo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'molle' =>
        array (
            'family' => 'Molle',
            'variants' =>
            array (
            0 => 'italic',
            ),
        ),
        'monda' =>
        array (
            'family' => 'Monda',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'monofett' =>
        array (
            'family' => 'Monofett',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'monomaniac-one' =>
        array (
            'family' => 'Monomaniac One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'monoton' =>
        array (
            'family' => 'Monoton',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'monsieur-la-doulaise' =>
        array (
            'family' => 'Monsieur La Doulaise',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'montaga' =>
        array (
            'family' => 'Montaga',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'montagu-slab' =>
        array (
            'family' => 'Montagu Slab',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'montecarlo' =>
        array (
            'family' => 'MonteCarlo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'montez' =>
        array (
            'family' => 'Montez',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'montserrat' =>
        array (
            'family' => 'Montserrat',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'montserrat-alternates' =>
        array (
            'family' => 'Montserrat Alternates',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'montserrat-subrayada' =>
        array (
            'family' => 'Montserrat Subrayada',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'moo-lah-lah' =>
        array (
            'family' => 'Moo Lah Lah',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mooli' =>
        array (
            'family' => 'Mooli',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'moon-dance' =>
        array (
            'family' => 'Moon Dance',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'moul' =>
        array (
            'family' => 'Moul',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'moulpali' =>
        array (
            'family' => 'Moulpali',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mountains-of-christmas' =>
        array (
            'family' => 'Mountains of Christmas',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'mouse-memoirs' =>
        array (
            'family' => 'Mouse Memoirs',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mr-bedfort' =>
        array (
            'family' => 'Mr Bedfort',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mr-dafoe' =>
        array (
            'family' => 'Mr Dafoe',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mr-de-haviland' =>
        array (
            'family' => 'Mr De Haviland',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mrs-saint-delafield' =>
        array (
            'family' => 'Mrs Saint Delafield',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mrs-sheppards' =>
        array (
            'family' => 'Mrs Sheppards',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ms-madi' =>
        array (
            'family' => 'Ms Madi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mukta' =>
        array (
            'family' => 'Mukta',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'mukta-mahee' =>
        array (
            'family' => 'Mukta Mahee',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'mukta-malar' =>
        array (
            'family' => 'Mukta Malar',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'mukta-vaani' =>
        array (
            'family' => 'Mukta Vaani',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'mulish' =>
        array (
            'family' => 'Mulish',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'murecho' =>
        array (
            'family' => 'Murecho',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'museomoderno' =>
        array (
            'family' => 'MuseoModerno',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'my-soul' =>
        array (
            'family' => 'My Soul',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mynerve' =>
        array (
            'family' => 'Mynerve',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'mystery-quest' =>
        array (
            'family' => 'Mystery Quest',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ntr' =>
        array (
            'family' => 'NTR',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nabla' =>
        array (
            'family' => 'Nabla',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'namdhinggo' =>
        array (
            'family' => 'Namdhinggo',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'nanum-brush-script' =>
        array (
            'family' => 'Nanum Brush Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nanum-gothic' =>
        array (
            'family' => 'Nanum Gothic',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '800',
            ),
        ),
        'nanum-gothic-coding' =>
        array (
            'family' => 'Nanum Gothic Coding',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'nanum-myeongjo' =>
        array (
            'family' => 'Nanum Myeongjo',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '800',
            ),
        ),
        'nanum-pen-script' =>
        array (
            'family' => 'Nanum Pen Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'narnoor' =>
        array (
            'family' => 'Narnoor',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'neonderthaw' =>
        array (
            'family' => 'Neonderthaw',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nerko-one' =>
        array (
            'family' => 'Nerko One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'neucha' =>
        array (
            'family' => 'Neucha',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'neuton' =>
        array (
            'family' => 'Neuton',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => 'italic',
            4 => '700',
            5 => '800',
            ),
        ),
        'new-rocker' =>
        array (
            'family' => 'New Rocker',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'new-tegomin' =>
        array (
            'family' => 'New Tegomin',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'news-cycle' =>
        array (
            'family' => 'News Cycle',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'newsreader' =>
        array (
            'family' => 'Newsreader',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '200italic',
            8 => '300italic',
            9 => 'italic',
            10 => '500italic',
            11 => '600italic',
            12 => '700italic',
            13 => '800italic',
            ),
        ),
        'niconne' =>
        array (
            'family' => 'Niconne',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'niramit' =>
        array (
            'family' => 'Niramit',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            ),
        ),
        'nixie-one' =>
        array (
            'family' => 'Nixie One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nobile' =>
        array (
            'family' => 'Nobile',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '500',
            3 => '500italic',
            4 => '700',
            5 => '700italic',
            ),
        ),
        'nokora' =>
        array (
            'family' => 'Nokora',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '900',
            ),
        ),
        'norican' =>
        array (
            'family' => 'Norican',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nosifer' =>
        array (
            'family' => 'Nosifer',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'notable' =>
        array (
            'family' => 'Notable',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nothing-you-could-do' =>
        array (
            'family' => 'Nothing You Could Do',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noticia-text' =>
        array (
            'family' => 'Noticia Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'noto-color-emoji' =>
        array (
            'family' => 'Noto Color Emoji',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-emoji' =>
        array (
            'family' => 'Noto Emoji',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'noto-kufi-arabic' =>
        array (
            'family' => 'Noto Kufi Arabic',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-music' =>
        array (
            'family' => 'Noto Music',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-naskh-arabic' =>
        array (
            'family' => 'Noto Naskh Arabic',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-nastaliq-urdu' =>
        array (
            'family' => 'Noto Nastaliq Urdu',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-rashi-hebrew' =>
        array (
            'family' => 'Noto Rashi Hebrew',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans' =>
        array (
            'family' => 'Noto Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'noto-sans-adlam' =>
        array (
            'family' => 'Noto Sans Adlam',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-adlam-unjoined' =>
        array (
            'family' => 'Noto Sans Adlam Unjoined',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-anatolian-hieroglyphs' =>
        array (
            'family' => 'Noto Sans Anatolian Hieroglyphs',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-arabic' =>
        array (
            'family' => 'Noto Sans Arabic',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-armenian' =>
        array (
            'family' => 'Noto Sans Armenian',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-avestan' =>
        array (
            'family' => 'Noto Sans Avestan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-balinese' =>
        array (
            'family' => 'Noto Sans Balinese',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-bamum' =>
        array (
            'family' => 'Noto Sans Bamum',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-bassa-vah' =>
        array (
            'family' => 'Noto Sans Bassa Vah',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-batak' =>
        array (
            'family' => 'Noto Sans Batak',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-bengali' =>
        array (
            'family' => 'Noto Sans Bengali',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-bhaiksuki' =>
        array (
            'family' => 'Noto Sans Bhaiksuki',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-brahmi' =>
        array (
            'family' => 'Noto Sans Brahmi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-buginese' =>
        array (
            'family' => 'Noto Sans Buginese',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-buhid' =>
        array (
            'family' => 'Noto Sans Buhid',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-canadian-aboriginal' =>
        array (
            'family' => 'Noto Sans Canadian Aboriginal',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-carian' =>
        array (
            'family' => 'Noto Sans Carian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-caucasian-albanian' =>
        array (
            'family' => 'Noto Sans Caucasian Albanian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-chakma' =>
        array (
            'family' => 'Noto Sans Chakma',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-cham' =>
        array (
            'family' => 'Noto Sans Cham',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-cherokee' =>
        array (
            'family' => 'Noto Sans Cherokee',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-chorasmian' =>
        array (
            'family' => 'Noto Sans Chorasmian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-coptic' =>
        array (
            'family' => 'Noto Sans Coptic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-cuneiform' =>
        array (
            'family' => 'Noto Sans Cuneiform',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-cypriot' =>
        array (
            'family' => 'Noto Sans Cypriot',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-cypro-minoan' =>
        array (
            'family' => 'Noto Sans Cypro Minoan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-deseret' =>
        array (
            'family' => 'Noto Sans Deseret',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-devanagari' =>
        array (
            'family' => 'Noto Sans Devanagari',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-display' =>
        array (
            'family' => 'Noto Sans Display',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'noto-sans-duployan' =>
        array (
            'family' => 'Noto Sans Duployan',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'noto-sans-egyptian-hieroglyphs' =>
        array (
            'family' => 'Noto Sans Egyptian Hieroglyphs',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-elbasan' =>
        array (
            'family' => 'Noto Sans Elbasan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-elymaic' =>
        array (
            'family' => 'Noto Sans Elymaic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-ethiopic' =>
        array (
            'family' => 'Noto Sans Ethiopic',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-georgian' =>
        array (
            'family' => 'Noto Sans Georgian',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-glagolitic' =>
        array (
            'family' => 'Noto Sans Glagolitic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-gothic' =>
        array (
            'family' => 'Noto Sans Gothic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-grantha' =>
        array (
            'family' => 'Noto Sans Grantha',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-gujarati' =>
        array (
            'family' => 'Noto Sans Gujarati',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-gunjala-gondi' =>
        array (
            'family' => 'Noto Sans Gunjala Gondi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-gurmukhi' =>
        array (
            'family' => 'Noto Sans Gurmukhi',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-hk' =>
        array (
            'family' => 'Noto Sans HK',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-hanifi-rohingya' =>
        array (
            'family' => 'Noto Sans Hanifi Rohingya',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-hanunoo' =>
        array (
            'family' => 'Noto Sans Hanunoo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-hatran' =>
        array (
            'family' => 'Noto Sans Hatran',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-hebrew' =>
        array (
            'family' => 'Noto Sans Hebrew',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-imperial-aramaic' =>
        array (
            'family' => 'Noto Sans Imperial Aramaic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-indic-siyaq-numbers' =>
        array (
            'family' => 'Noto Sans Indic Siyaq Numbers',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-inscriptional-pahlavi' =>
        array (
            'family' => 'Noto Sans Inscriptional Pahlavi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-inscriptional-parthian' =>
        array (
            'family' => 'Noto Sans Inscriptional Parthian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-jp' =>
        array (
            'family' => 'Noto Sans JP',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-javanese' =>
        array (
            'family' => 'Noto Sans Javanese',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-kr' =>
        array (
            'family' => 'Noto Sans KR',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-kaithi' =>
        array (
            'family' => 'Noto Sans Kaithi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-kannada' =>
        array (
            'family' => 'Noto Sans Kannada',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-kawi' =>
        array (
            'family' => 'Noto Sans Kawi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-kayah-li' =>
        array (
            'family' => 'Noto Sans Kayah Li',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-kharoshthi' =>
        array (
            'family' => 'Noto Sans Kharoshthi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-khmer' =>
        array (
            'family' => 'Noto Sans Khmer',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-khojki' =>
        array (
            'family' => 'Noto Sans Khojki',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-khudawadi' =>
        array (
            'family' => 'Noto Sans Khudawadi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-lao' =>
        array (
            'family' => 'Noto Sans Lao',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-lao-looped' =>
        array (
            'family' => 'Noto Sans Lao Looped',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-lepcha' =>
        array (
            'family' => 'Noto Sans Lepcha',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-limbu' =>
        array (
            'family' => 'Noto Sans Limbu',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-linear-a' =>
        array (
            'family' => 'Noto Sans Linear A',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-linear-b' =>
        array (
            'family' => 'Noto Sans Linear B',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-lisu' =>
        array (
            'family' => 'Noto Sans Lisu',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-lycian' =>
        array (
            'family' => 'Noto Sans Lycian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-lydian' =>
        array (
            'family' => 'Noto Sans Lydian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-mahajani' =>
        array (
            'family' => 'Noto Sans Mahajani',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-malayalam' =>
        array (
            'family' => 'Noto Sans Malayalam',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-mandaic' =>
        array (
            'family' => 'Noto Sans Mandaic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-manichaean' =>
        array (
            'family' => 'Noto Sans Manichaean',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-marchen' =>
        array (
            'family' => 'Noto Sans Marchen',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-masaram-gondi' =>
        array (
            'family' => 'Noto Sans Masaram Gondi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-math' =>
        array (
            'family' => 'Noto Sans Math',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-mayan-numerals' =>
        array (
            'family' => 'Noto Sans Mayan Numerals',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-medefaidrin' =>
        array (
            'family' => 'Noto Sans Medefaidrin',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-meetei-mayek' =>
        array (
            'family' => 'Noto Sans Meetei Mayek',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-mende-kikakui' =>
        array (
            'family' => 'Noto Sans Mende Kikakui',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-meroitic' =>
        array (
            'family' => 'Noto Sans Meroitic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-miao' =>
        array (
            'family' => 'Noto Sans Miao',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-modi' =>
        array (
            'family' => 'Noto Sans Modi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-mongolian' =>
        array (
            'family' => 'Noto Sans Mongolian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-mono' =>
        array (
            'family' => 'Noto Sans Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-mro' =>
        array (
            'family' => 'Noto Sans Mro',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-multani' =>
        array (
            'family' => 'Noto Sans Multani',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-myanmar' =>
        array (
            'family' => 'Noto Sans Myanmar',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-nko' =>
        array (
            'family' => 'Noto Sans NKo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-nko-unjoined' =>
        array (
            'family' => 'Noto Sans NKo Unjoined',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-nabataean' =>
        array (
            'family' => 'Noto Sans Nabataean',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-nag-mundari' =>
        array (
            'family' => 'Noto Sans Nag Mundari',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-nandinagari' =>
        array (
            'family' => 'Noto Sans Nandinagari',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-new-tai-lue' =>
        array (
            'family' => 'Noto Sans New Tai Lue',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-newa' =>
        array (
            'family' => 'Noto Sans Newa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-nushu' =>
        array (
            'family' => 'Noto Sans Nushu',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-ogham' =>
        array (
            'family' => 'Noto Sans Ogham',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-ol-chiki' =>
        array (
            'family' => 'Noto Sans Ol Chiki',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-old-hungarian' =>
        array (
            'family' => 'Noto Sans Old Hungarian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-italic' =>
        array (
            'family' => 'Noto Sans Old Italic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-north-arabian' =>
        array (
            'family' => 'Noto Sans Old North Arabian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-permic' =>
        array (
            'family' => 'Noto Sans Old Permic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-persian' =>
        array (
            'family' => 'Noto Sans Old Persian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-sogdian' =>
        array (
            'family' => 'Noto Sans Old Sogdian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-south-arabian' =>
        array (
            'family' => 'Noto Sans Old South Arabian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-old-turkic' =>
        array (
            'family' => 'Noto Sans Old Turkic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-oriya' =>
        array (
            'family' => 'Noto Sans Oriya',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-osage' =>
        array (
            'family' => 'Noto Sans Osage',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-osmanya' =>
        array (
            'family' => 'Noto Sans Osmanya',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-pahawh-hmong' =>
        array (
            'family' => 'Noto Sans Pahawh Hmong',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-palmyrene' =>
        array (
            'family' => 'Noto Sans Palmyrene',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-pau-cin-hau' =>
        array (
            'family' => 'Noto Sans Pau Cin Hau',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-phags-pa' =>
        array (
            'family' => 'Noto Sans Phags Pa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-phoenician' =>
        array (
            'family' => 'Noto Sans Phoenician',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-psalter-pahlavi' =>
        array (
            'family' => 'Noto Sans Psalter Pahlavi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-rejang' =>
        array (
            'family' => 'Noto Sans Rejang',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-runic' =>
        array (
            'family' => 'Noto Sans Runic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-sc' =>
        array (
            'family' => 'Noto Sans SC',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-samaritan' =>
        array (
            'family' => 'Noto Sans Samaritan',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-saurashtra' =>
        array (
            'family' => 'Noto Sans Saurashtra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-sharada' =>
        array (
            'family' => 'Noto Sans Sharada',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-shavian' =>
        array (
            'family' => 'Noto Sans Shavian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-siddham' =>
        array (
            'family' => 'Noto Sans Siddham',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-signwriting' =>
        array (
            'family' => 'Noto Sans SignWriting',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-sinhala' =>
        array (
            'family' => 'Noto Sans Sinhala',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-sogdian' =>
        array (
            'family' => 'Noto Sans Sogdian',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-sora-sompeng' =>
        array (
            'family' => 'Noto Sans Sora Sompeng',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-soyombo' =>
        array (
            'family' => 'Noto Sans Soyombo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-sundanese' =>
        array (
            'family' => 'Noto Sans Sundanese',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-syloti-nagri' =>
        array (
            'family' => 'Noto Sans Syloti Nagri',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-symbols' =>
        array (
            'family' => 'Noto Sans Symbols',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-symbols-2' =>
        array (
            'family' => 'Noto Sans Symbols 2',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-syriac' =>
        array (
            'family' => 'Noto Sans Syriac',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-syriac-eastern' =>
        array (
            'family' => 'Noto Sans Syriac Eastern',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-tc' =>
        array (
            'family' => 'Noto Sans TC',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-tagalog' =>
        array (
            'family' => 'Noto Sans Tagalog',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tagbanwa' =>
        array (
            'family' => 'Noto Sans Tagbanwa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tai-le' =>
        array (
            'family' => 'Noto Sans Tai Le',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tai-tham' =>
        array (
            'family' => 'Noto Sans Tai Tham',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-tai-viet' =>
        array (
            'family' => 'Noto Sans Tai Viet',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-takri' =>
        array (
            'family' => 'Noto Sans Takri',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tamil' =>
        array (
            'family' => 'Noto Sans Tamil',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-tamil-supplement' =>
        array (
            'family' => 'Noto Sans Tamil Supplement',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tangsa' =>
        array (
            'family' => 'Noto Sans Tangsa',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-telugu' =>
        array (
            'family' => 'Noto Sans Telugu',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-thaana' =>
        array (
            'family' => 'Noto Sans Thaana',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-thai' =>
        array (
            'family' => 'Noto Sans Thai',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-thai-looped' =>
        array (
            'family' => 'Noto Sans Thai Looped',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-sans-tifinagh' =>
        array (
            'family' => 'Noto Sans Tifinagh',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-tirhuta' =>
        array (
            'family' => 'Noto Sans Tirhuta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-ugaritic' =>
        array (
            'family' => 'Noto Sans Ugaritic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-vai' =>
        array (
            'family' => 'Noto Sans Vai',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-vithkuqi' =>
        array (
            'family' => 'Noto Sans Vithkuqi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-sans-wancho' =>
        array (
            'family' => 'Noto Sans Wancho',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-warang-citi' =>
        array (
            'family' => 'Noto Sans Warang Citi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-yi' =>
        array (
            'family' => 'Noto Sans Yi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-sans-zanabazar-square' =>
        array (
            'family' => 'Noto Sans Zanabazar Square',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif' =>
        array (
            'family' => 'Noto Serif',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'noto-serif-ahom' =>
        array (
            'family' => 'Noto Serif Ahom',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-armenian' =>
        array (
            'family' => 'Noto Serif Armenian',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-balinese' =>
        array (
            'family' => 'Noto Serif Balinese',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-bengali' =>
        array (
            'family' => 'Noto Serif Bengali',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-devanagari' =>
        array (
            'family' => 'Noto Serif Devanagari',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-display' =>
        array (
            'family' => 'Noto Serif Display',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'noto-serif-dogra' =>
        array (
            'family' => 'Noto Serif Dogra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-ethiopic' =>
        array (
            'family' => 'Noto Serif Ethiopic',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-georgian' =>
        array (
            'family' => 'Noto Serif Georgian',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-grantha' =>
        array (
            'family' => 'Noto Serif Grantha',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-gujarati' =>
        array (
            'family' => 'Noto Serif Gujarati',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-gurmukhi' =>
        array (
            'family' => 'Noto Serif Gurmukhi',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-hk' =>
        array (
            'family' => 'Noto Serif HK',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'noto-serif-hebrew' =>
        array (
            'family' => 'Noto Serif Hebrew',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-jp' =>
        array (
            'family' => 'Noto Serif JP',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '900',
            ),
        ),
        'noto-serif-kr' =>
        array (
            'family' => 'Noto Serif KR',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '900',
            ),
        ),
        'noto-serif-kannada' =>
        array (
            'family' => 'Noto Serif Kannada',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-khitan-small-script' =>
        array (
            'family' => 'Noto Serif Khitan Small Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-khmer' =>
        array (
            'family' => 'Noto Serif Khmer',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-khojki' =>
        array (
            'family' => 'Noto Serif Khojki',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-serif-lao' =>
        array (
            'family' => 'Noto Serif Lao',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-makasar' =>
        array (
            'family' => 'Noto Serif Makasar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-malayalam' =>
        array (
            'family' => 'Noto Serif Malayalam',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-myanmar' =>
        array (
            'family' => 'Noto Serif Myanmar',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-np-hmong' =>
        array (
            'family' => 'Noto Serif NP Hmong',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-serif-old-uyghur' =>
        array (
            'family' => 'Noto Serif Old Uyghur',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-oriya' =>
        array (
            'family' => 'Noto Serif Oriya',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-serif-ottoman-siyaq' =>
        array (
            'family' => 'Noto Serif Ottoman Siyaq',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-sc' =>
        array (
            'family' => 'Noto Serif SC',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '900',
            ),
        ),
        'noto-serif-sinhala' =>
        array (
            'family' => 'Noto Serif Sinhala',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-tc' =>
        array (
            'family' => 'Noto Serif TC',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '900',
            ),
        ),
        'noto-serif-tamil' =>
        array (
            'family' => 'Noto Serif Tamil',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'noto-serif-tangut' =>
        array (
            'family' => 'Noto Serif Tangut',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'noto-serif-telugu' =>
        array (
            'family' => 'Noto Serif Telugu',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-thai' =>
        array (
            'family' => 'Noto Serif Thai',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-tibetan' =>
        array (
            'family' => 'Noto Serif Tibetan',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'noto-serif-toto' =>
        array (
            'family' => 'Noto Serif Toto',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-serif-vithkuqi' =>
        array (
            'family' => 'Noto Serif Vithkuqi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-serif-yezidi' =>
        array (
            'family' => 'Noto Serif Yezidi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'noto-traditional-nushu' =>
        array (
            'family' => 'Noto Traditional Nushu',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'nova-cut' =>
        array (
            'family' => 'Nova Cut',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-flat' =>
        array (
            'family' => 'Nova Flat',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-mono' =>
        array (
            'family' => 'Nova Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-oval' =>
        array (
            'family' => 'Nova Oval',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-round' =>
        array (
            'family' => 'Nova Round',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-script' =>
        array (
            'family' => 'Nova Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-slim' =>
        array (
            'family' => 'Nova Slim',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nova-square' =>
        array (
            'family' => 'Nova Square',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'numans' =>
        array (
            'family' => 'Numans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'nunito' =>
        array (
            'family' => 'Nunito',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'nunito-sans' =>
        array (
            'family' => 'Nunito Sans',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'nuosu-sil' =>
        array (
            'family' => 'Nuosu SIL',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'odibee-sans' =>
        array (
            'family' => 'Odibee Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'odor-mean-chey' =>
        array (
            'family' => 'Odor Mean Chey',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'offside' =>
        array (
            'family' => 'Offside',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'oi' =>
        array (
            'family' => 'Oi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ojuju' =>
        array (
            'family' => 'Ojuju',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'old-standard-tt' =>
        array (
            'family' => 'Old Standard TT',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'oldenburg' =>
        array (
            'family' => 'Oldenburg',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ole' =>
        array (
            'family' => 'Ole',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'oleo-script' =>
        array (
            'family' => 'Oleo Script',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'oleo-script-swash-caps' =>
        array (
            'family' => 'Oleo Script Swash Caps',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'onest' =>
        array (
            'family' => 'Onest',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'oooh-baby' =>
        array (
            'family' => 'Oooh Baby',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'open-sans' =>
        array (
            'family' => 'Open Sans',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '300italic',
            7 => 'italic',
            8 => '500italic',
            9 => '600italic',
            10 => '700italic',
            11 => '800italic',
            ),
        ),
        'oranienbaum' =>
        array (
            'family' => 'Oranienbaum',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'orbit' =>
        array (
            'family' => 'Orbit',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'orbitron' =>
        array (
            'family' => 'Orbitron',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'oregano' =>
        array (
            'family' => 'Oregano',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'orelega-one' =>
        array (
            'family' => 'Orelega One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'orienta' =>
        array (
            'family' => 'Orienta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'original-surfer' =>
        array (
            'family' => 'Original Surfer',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'oswald' =>
        array (
            'family' => 'Oswald',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'outfit' =>
        array (
            'family' => 'Outfit',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'over-the-rainbow' =>
        array (
            'family' => 'Over the Rainbow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'overlock' =>
        array (
            'family' => 'Overlock',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            4 => '900',
            5 => '900italic',
            ),
        ),
        'overlock-sc' =>
        array (
            'family' => 'Overlock SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'overpass' =>
        array (
            'family' => 'Overpass',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'overpass-mono' =>
        array (
            'family' => 'Overpass Mono',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'ovo' =>
        array (
            'family' => 'Ovo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'oxanium' =>
        array (
            'family' => 'Oxanium',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'oxygen' =>
        array (
            'family' => 'Oxygen',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'oxygen-mono' =>
        array (
            'family' => 'Oxygen Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pt-mono' =>
        array (
            'family' => 'PT Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pt-sans' =>
        array (
            'family' => 'PT Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'pt-sans-caption' =>
        array (
            'family' => 'PT Sans Caption',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'pt-sans-narrow' =>
        array (
            'family' => 'PT Sans Narrow',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'pt-serif' =>
        array (
            'family' => 'PT Serif',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'pt-serif-caption' =>
        array (
            'family' => 'PT Serif Caption',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'pacifico' =>
        array (
            'family' => 'Pacifico',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'padauk' =>
        array (
            'family' => 'Padauk',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'padyakke-expanded-one' =>
        array (
            'family' => 'Padyakke Expanded One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'palanquin' =>
        array (
            'family' => 'Palanquin',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            ),
        ),
        'palanquin-dark' =>
        array (
            'family' => 'Palanquin Dark',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'palette-mosaic' =>
        array (
            'family' => 'Palette Mosaic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pangolin' =>
        array (
            'family' => 'Pangolin',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'paprika' =>
        array (
            'family' => 'Paprika',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'parisienne' =>
        array (
            'family' => 'Parisienne',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'passero-one' =>
        array (
            'family' => 'Passero One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'passion-one' =>
        array (
            'family' => 'Passion One',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '900',
            ),
        ),
        'passions-conflict' =>
        array (
            'family' => 'Passions Conflict',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pathway-extreme' =>
        array (
            'family' => 'Pathway Extreme',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'pathway-gothic-one' =>
        array (
            'family' => 'Pathway Gothic One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'patrick-hand' =>
        array (
            'family' => 'Patrick Hand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'patrick-hand-sc' =>
        array (
            'family' => 'Patrick Hand SC',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pattaya' =>
        array (
            'family' => 'Pattaya',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'patua-one' =>
        array (
            'family' => 'Patua One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pavanam' =>
        array (
            'family' => 'Pavanam',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'paytone-one' =>
        array (
            'family' => 'Paytone One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'peddana' =>
        array (
            'family' => 'Peddana',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'peralta' =>
        array (
            'family' => 'Peralta',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'permanent-marker' =>
        array (
            'family' => 'Permanent Marker',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'petemoss' =>
        array (
            'family' => 'Petemoss',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'petit-formal-script' =>
        array (
            'family' => 'Petit Formal Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'petrona' =>
        array (
            'family' => 'Petrona',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'philosopher' =>
        array (
            'family' => 'Philosopher',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'phudu' =>
        array (
            'family' => 'Phudu',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'piazzolla' =>
        array (
            'family' => 'Piazzolla',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'piedra' =>
        array (
            'family' => 'Piedra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pinyon-script' =>
        array (
            'family' => 'Pinyon Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pirata-one' =>
        array (
            'family' => 'Pirata One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pixelify-sans' =>
        array (
            'family' => 'Pixelify Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'plaster' =>
        array (
            'family' => 'Plaster',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'play' =>
        array (
            'family' => 'Play',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'playball' =>
        array (
            'family' => 'Playball',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'playfair' =>
        array (
            'family' => 'Playfair',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            7 => '300italic',
            8 => 'italic',
            9 => '500italic',
            10 => '600italic',
            11 => '700italic',
            12 => '800italic',
            13 => '900italic',
            ),
        ),
        'playfair-display' =>
        array (
            'family' => 'Playfair Display',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'playfair-display-sc' =>
        array (
            'family' => 'Playfair Display SC',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            4 => '900',
            5 => '900italic',
            ),
        ),
        'playpen-sans' =>
        array (
            'family' => 'Playpen Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'plus-jakarta-sans' =>
        array (
            'family' => 'Plus Jakarta Sans',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '200italic',
            8 => '300italic',
            9 => 'italic',
            10 => '500italic',
            11 => '600italic',
            12 => '700italic',
            13 => '800italic',
            ),
        ),
        'podkova' =>
        array (
            'family' => 'Podkova',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'poiret-one' =>
        array (
            'family' => 'Poiret One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'poller-one' =>
        array (
            'family' => 'Poller One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'poltawski-nowy' =>
        array (
            'family' => 'Poltawski Nowy',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'poly' =>
        array (
            'family' => 'Poly',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'pompiere' =>
        array (
            'family' => 'Pompiere',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pontano-sans' =>
        array (
            'family' => 'Pontano Sans',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'poor-story' =>
        array (
            'family' => 'Poor Story',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'poppins' =>
        array (
            'family' => 'Poppins',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'port-lligat-sans' =>
        array (
            'family' => 'Port Lligat Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'port-lligat-slab' =>
        array (
            'family' => 'Port Lligat Slab',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'potta-one' =>
        array (
            'family' => 'Potta One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pragati-narrow' =>
        array (
            'family' => 'Pragati Narrow',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'praise' =>
        array (
            'family' => 'Praise',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'prata' =>
        array (
            'family' => 'Prata',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'preahvihear' =>
        array (
            'family' => 'Preahvihear',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'press-start-2p' =>
        array (
            'family' => 'Press Start 2P',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'pridi' =>
        array (
            'family' => 'Pridi',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'princess-sofia' =>
        array (
            'family' => 'Princess Sofia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'prociono' =>
        array (
            'family' => 'Prociono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'prompt' =>
        array (
            'family' => 'Prompt',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'prosto-one' =>
        array (
            'family' => 'Prosto One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'protest-guerrilla' =>
        array (
            'family' => 'Protest Guerrilla',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'protest-revolution' =>
        array (
            'family' => 'Protest Revolution',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'protest-riot' =>
        array (
            'family' => 'Protest Riot',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'protest-strike' =>
        array (
            'family' => 'Protest Strike',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'proza-libre' =>
        array (
            'family' => 'Proza Libre',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '500',
            3 => '500italic',
            4 => '600',
            5 => '600italic',
            6 => '700',
            7 => '700italic',
            8 => '800',
            9 => '800italic',
            ),
        ),
        'public-sans' =>
        array (
            'family' => 'Public Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'puppies-play' =>
        array (
            'family' => 'Puppies Play',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'puritan' =>
        array (
            'family' => 'Puritan',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'purple-purse' =>
        array (
            'family' => 'Purple Purse',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'qahiri' =>
        array (
            'family' => 'Qahiri',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'quando' =>
        array (
            'family' => 'Quando',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'quantico' =>
        array (
            'family' => 'Quantico',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'quattrocento' =>
        array (
            'family' => 'Quattrocento',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'quattrocento-sans' =>
        array (
            'family' => 'Quattrocento Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'questrial' =>
        array (
            'family' => 'Questrial',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'quicksand' =>
        array (
            'family' => 'Quicksand',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'quintessential' =>
        array (
            'family' => 'Quintessential',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'qwigley' =>
        array (
            'family' => 'Qwigley',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'qwitcher-grypen' =>
        array (
            'family' => 'Qwitcher Grypen',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'rem' =>
        array (
            'family' => 'REM',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'racing-sans-one' =>
        array (
            'family' => 'Racing Sans One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'radio-canada' =>
        array (
            'family' => 'Radio Canada',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'radley' =>
        array (
            'family' => 'Radley',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'rajdhani' =>
        array (
            'family' => 'Rajdhani',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'rakkas' =>
        array (
            'family' => 'Rakkas',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'raleway' =>
        array (
            'family' => 'Raleway',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'raleway-dots' =>
        array (
            'family' => 'Raleway Dots',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ramabhadra' =>
        array (
            'family' => 'Ramabhadra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ramaraja' =>
        array (
            'family' => 'Ramaraja',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rambla' =>
        array (
            'family' => 'Rambla',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'rammetto-one' =>
        array (
            'family' => 'Rammetto One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rampart-one' =>
        array (
            'family' => 'Rampart One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ranchers' =>
        array (
            'family' => 'Ranchers',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rancho' =>
        array (
            'family' => 'Rancho',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ranga' =>
        array (
            'family' => 'Ranga',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'rasa' =>
        array (
            'family' => 'Rasa',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'rationale' =>
        array (
            'family' => 'Rationale',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ravi-prakash' =>
        array (
            'family' => 'Ravi Prakash',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'readex-pro' =>
        array (
            'family' => 'Readex Pro',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'recursive' =>
        array (
            'family' => 'Recursive',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'red-hat-display' =>
        array (
            'family' => 'Red Hat Display',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            7 => '300italic',
            8 => 'italic',
            9 => '500italic',
            10 => '600italic',
            11 => '700italic',
            12 => '800italic',
            13 => '900italic',
            ),
        ),
        'red-hat-mono' =>
        array (
            'family' => 'Red Hat Mono',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'red-hat-text' =>
        array (
            'family' => 'Red Hat Text',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'red-rose' =>
        array (
            'family' => 'Red Rose',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'redacted' =>
        array (
            'family' => 'Redacted',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'redacted-script' =>
        array (
            'family' => 'Redacted Script',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'redressed' =>
        array (
            'family' => 'Redressed',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'reem-kufi' =>
        array (
            'family' => 'Reem Kufi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'reem-kufi-fun' =>
        array (
            'family' => 'Reem Kufi Fun',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'reem-kufi-ink' =>
        array (
            'family' => 'Reem Kufi Ink',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'reenie-beanie' =>
        array (
            'family' => 'Reenie Beanie',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'reggae-one' =>
        array (
            'family' => 'Reggae One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rethink-sans' =>
        array (
            'family' => 'Rethink Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => 'italic',
            6 => '500italic',
            7 => '600italic',
            8 => '700italic',
            9 => '800italic',
            ),
        ),
        'revalia' =>
        array (
            'family' => 'Revalia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rhodium-libre' =>
        array (
            'family' => 'Rhodium Libre',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ribeye' =>
        array (
            'family' => 'Ribeye',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ribeye-marrow' =>
        array (
            'family' => 'Ribeye Marrow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'righteous' =>
        array (
            'family' => 'Righteous',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'risque' =>
        array (
            'family' => 'Risque',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'road-rage' =>
        array (
            'family' => 'Road Rage',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'roboto' =>
        array (
            'family' => 'Roboto',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '700',
            9 => '700italic',
            10 => '900',
            11 => '900italic',
            ),
        ),
        'roboto-condensed' =>
        array (
            'family' => 'Roboto Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'roboto-flex' =>
        array (
            'family' => 'Roboto Flex',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'roboto-mono' =>
        array (
            'family' => 'Roboto Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '100italic',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            ),
        ),
        'roboto-serif' =>
        array (
            'family' => 'Roboto Serif',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'roboto-slab' =>
        array (
            'family' => 'Roboto Slab',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'rochester' =>
        array (
            'family' => 'Rochester',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rock-3d' =>
        array (
            'family' => 'Rock 3D',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rock-salt' =>
        array (
            'family' => 'Rock Salt',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rocknroll-one' =>
        array (
            'family' => 'RocknRoll One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rokkitt' =>
        array (
            'family' => 'Rokkitt',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'romanesco' =>
        array (
            'family' => 'Romanesco',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ropa-sans' =>
        array (
            'family' => 'Ropa Sans',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'rosario' =>
        array (
            'family' => 'Rosario',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'rosarivo' =>
        array (
            'family' => 'Rosarivo',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'rouge-script' =>
        array (
            'family' => 'Rouge Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rowdies' =>
        array (
            'family' => 'Rowdies',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'rozha-one' =>
        array (
            'family' => 'Rozha One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik' =>
        array (
            'family' => 'Rubik',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            7 => '300italic',
            8 => 'italic',
            9 => '500italic',
            10 => '600italic',
            11 => '700italic',
            12 => '800italic',
            13 => '900italic',
            ),
        ),
        'rubik-80s-fade' =>
        array (
            'family' => 'Rubik 80s Fade',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-beastly' =>
        array (
            'family' => 'Rubik Beastly',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-broken-fax' =>
        array (
            'family' => 'Rubik Broken Fax',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-bubbles' =>
        array (
            'family' => 'Rubik Bubbles',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-burned' =>
        array (
            'family' => 'Rubik Burned',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-dirt' =>
        array (
            'family' => 'Rubik Dirt',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-distressed' =>
        array (
            'family' => 'Rubik Distressed',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-doodle-shadow' =>
        array (
            'family' => 'Rubik Doodle Shadow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-doodle-triangles' =>
        array (
            'family' => 'Rubik Doodle Triangles',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-gemstones' =>
        array (
            'family' => 'Rubik Gemstones',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-glitch' =>
        array (
            'family' => 'Rubik Glitch',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-glitch-pop' =>
        array (
            'family' => 'Rubik Glitch Pop',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-iso' =>
        array (
            'family' => 'Rubik Iso',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-lines' =>
        array (
            'family' => 'Rubik Lines',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-maps' =>
        array (
            'family' => 'Rubik Maps',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-marker-hatch' =>
        array (
            'family' => 'Rubik Marker Hatch',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-maze' =>
        array (
            'family' => 'Rubik Maze',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-microbe' =>
        array (
            'family' => 'Rubik Microbe',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-mono-one' =>
        array (
            'family' => 'Rubik Mono One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-moonrocks' =>
        array (
            'family' => 'Rubik Moonrocks',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-pixels' =>
        array (
            'family' => 'Rubik Pixels',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-puddles' =>
        array (
            'family' => 'Rubik Puddles',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-scribble' =>
        array (
            'family' => 'Rubik Scribble',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-spray-paint' =>
        array (
            'family' => 'Rubik Spray Paint',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-storm' =>
        array (
            'family' => 'Rubik Storm',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-vinyl' =>
        array (
            'family' => 'Rubik Vinyl',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rubik-wet-paint' =>
        array (
            'family' => 'Rubik Wet Paint',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ruda' =>
        array (
            'family' => 'Ruda',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'rufina' =>
        array (
            'family' => 'Rufina',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'ruge-boogie' =>
        array (
            'family' => 'Ruge Boogie',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ruluko' =>
        array (
            'family' => 'Ruluko',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'rum-raisin' =>
        array (
            'family' => 'Rum Raisin',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ruslan-display' =>
        array (
            'family' => 'Ruslan Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'russo-one' =>
        array (
            'family' => 'Russo One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ruthie' =>
        array (
            'family' => 'Ruthie',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ruwudu' =>
        array (
            'family' => 'Ruwudu',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'rye' =>
        array (
            'family' => 'Rye',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stix-two-text' =>
        array (
            'family' => 'STIX Two Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'sacramento' =>
        array (
            'family' => 'Sacramento',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sahitya' =>
        array (
            'family' => 'Sahitya',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'sail' =>
        array (
            'family' => 'Sail',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'saira' =>
        array (
            'family' => 'Saira',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'saira-condensed' =>
        array (
            'family' => 'Saira Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'saira-extra-condensed' =>
        array (
            'family' => 'Saira Extra Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'saira-semi-condensed' =>
        array (
            'family' => 'Saira Semi Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'saira-stencil-one' =>
        array (
            'family' => 'Saira Stencil One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'salsa' =>
        array (
            'family' => 'Salsa',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sanchez' =>
        array (
            'family' => 'Sanchez',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'sancreek' =>
        array (
            'family' => 'Sancreek',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sansita' =>
        array (
            'family' => 'Sansita',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            4 => '800',
            5 => '800italic',
            6 => '900',
            7 => '900italic',
            ),
        ),
        'sansita-swashed' =>
        array (
            'family' => 'Sansita Swashed',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'sarabun' =>
        array (
            'family' => 'Sarabun',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            ),
        ),
        'sarala' =>
        array (
            'family' => 'Sarala',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'sarina' =>
        array (
            'family' => 'Sarina',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sarpanch' =>
        array (
            'family' => 'Sarpanch',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'sassy-frass' =>
        array (
            'family' => 'Sassy Frass',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'satisfy' =>
        array (
            'family' => 'Satisfy',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sawarabi-gothic' =>
        array (
            'family' => 'Sawarabi Gothic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sawarabi-mincho' =>
        array (
            'family' => 'Sawarabi Mincho',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'scada' =>
        array (
            'family' => 'Scada',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'scheherazade-new' =>
        array (
            'family' => 'Scheherazade New',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            ),
        ),
        'schibsted-grotesk' =>
        array (
            'family' => 'Schibsted Grotesk',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'schoolbell' =>
        array (
            'family' => 'Schoolbell',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'scope-one' =>
        array (
            'family' => 'Scope One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'seaweed-script' =>
        array (
            'family' => 'Seaweed Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'secular-one' =>
        array (
            'family' => 'Secular One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sedgwick-ave' =>
        array (
            'family' => 'Sedgwick Ave',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sedgwick-ave-display' =>
        array (
            'family' => 'Sedgwick Ave Display',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sen' =>
        array (
            'family' => 'Sen',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'send-flowers' =>
        array (
            'family' => 'Send Flowers',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sevillana' =>
        array (
            'family' => 'Sevillana',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'seymour-one' =>
        array (
            'family' => 'Seymour One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shadows-into-light' =>
        array (
            'family' => 'Shadows Into Light',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shadows-into-light-two' =>
        array (
            'family' => 'Shadows Into Light Two',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shalimar' =>
        array (
            'family' => 'Shalimar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shantell-sans' =>
        array (
            'family' => 'Shantell Sans',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '800',
            6 => '300italic',
            7 => 'italic',
            8 => '500italic',
            9 => '600italic',
            10 => '700italic',
            11 => '800italic',
            ),
        ),
        'shanti' =>
        array (
            'family' => 'Shanti',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'share' =>
        array (
            'family' => 'Share',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'share-tech' =>
        array (
            'family' => 'Share Tech',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'share-tech-mono' =>
        array (
            'family' => 'Share Tech Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shippori-antique' =>
        array (
            'family' => 'Shippori Antique',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shippori-antique-b1' =>
        array (
            'family' => 'Shippori Antique B1',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shippori-mincho' =>
        array (
            'family' => 'Shippori Mincho',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'shippori-mincho-b1' =>
        array (
            'family' => 'Shippori Mincho B1',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'shizuru' =>
        array (
            'family' => 'Shizuru',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shojumaru' =>
        array (
            'family' => 'Shojumaru',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'short-stack' =>
        array (
            'family' => 'Short Stack',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'shrikhand' =>
        array (
            'family' => 'Shrikhand',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'siemreap' =>
        array (
            'family' => 'Siemreap',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sigmar' =>
        array (
            'family' => 'Sigmar',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sigmar-one' =>
        array (
            'family' => 'Sigmar One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'signika' =>
        array (
            'family' => 'Signika',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'signika-negative' =>
        array (
            'family' => 'Signika Negative',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'silkscreen' =>
        array (
            'family' => 'Silkscreen',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'simonetta' =>
        array (
            'family' => 'Simonetta',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '900',
            3 => '900italic',
            ),
        ),
        'single-day' =>
        array (
            'family' => 'Single Day',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sintony' =>
        array (
            'family' => 'Sintony',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'sirin-stencil' =>
        array (
            'family' => 'Sirin Stencil',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'six-caps' =>
        array (
            'family' => 'Six Caps',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sixtyfour' =>
        array (
            'family' => 'Sixtyfour',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'skranji' =>
        array (
            'family' => 'Skranji',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'slabo-13px' =>
        array (
            'family' => 'Slabo 13px',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'slabo-27px' =>
        array (
            'family' => 'Slabo 27px',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'slackey' =>
        array (
            'family' => 'Slackey',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'slackside-one' =>
        array (
            'family' => 'Slackside One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'smokum' =>
        array (
            'family' => 'Smokum',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'smooch' =>
        array (
            'family' => 'Smooch',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'smooch-sans' =>
        array (
            'family' => 'Smooch Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'smythe' =>
        array (
            'family' => 'Smythe',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sniglet' =>
        array (
            'family' => 'Sniglet',
            'variants' =>
            array (
            0 => 'regular',
            1 => '800',
            ),
        ),
        'snippet' =>
        array (
            'family' => 'Snippet',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'snowburst-one' =>
        array (
            'family' => 'Snowburst One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sofadi-one' =>
        array (
            'family' => 'Sofadi One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sofia' =>
        array (
            'family' => 'Sofia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sofia-sans' =>
        array (
            'family' => 'Sofia Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'sofia-sans-condensed' =>
        array (
            'family' => 'Sofia Sans Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'sofia-sans-extra-condensed' =>
        array (
            'family' => 'Sofia Sans Extra Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'sofia-sans-semi-condensed' =>
        array (
            'family' => 'Sofia Sans Semi Condensed',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'solitreo' =>
        array (
            'family' => 'Solitreo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'solway' =>
        array (
            'family' => 'Solway',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '700',
            4 => '800',
            ),
        ),
        'sometype-mono' =>
        array (
            'family' => 'Sometype Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => 'italic',
            5 => '500italic',
            6 => '600italic',
            7 => '700italic',
            ),
        ),
        'song-myung' =>
        array (
            'family' => 'Song Myung',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sono' =>
        array (
            'family' => 'Sono',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'sonsie-one' =>
        array (
            'family' => 'Sonsie One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sora' =>
        array (
            'family' => 'Sora',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'sorts-mill-goudy' =>
        array (
            'family' => 'Sorts Mill Goudy',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'source-code-pro' =>
        array (
            'family' => 'Source Code Pro',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'source-sans-3' =>
        array (
            'family' => 'Source Sans 3',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'source-serif-4' =>
        array (
            'family' => 'Source Serif 4',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            14 => '800italic',
            15 => '900italic',
            ),
        ),
        'space-grotesk' =>
        array (
            'family' => 'Space Grotesk',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'space-mono' =>
        array (
            'family' => 'Space Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'special-elite' =>
        array (
            'family' => 'Special Elite',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'spectral' =>
        array (
            'family' => 'Spectral',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            12 => '800',
            13 => '800italic',
            ),
        ),
        'spectral-sc' =>
        array (
            'family' => 'Spectral SC',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '500',
            7 => '500italic',
            8 => '600',
            9 => '600italic',
            10 => '700',
            11 => '700italic',
            12 => '800',
            13 => '800italic',
            ),
        ),
        'spicy-rice' =>
        array (
            'family' => 'Spicy Rice',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'spinnaker' =>
        array (
            'family' => 'Spinnaker',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'spirax' =>
        array (
            'family' => 'Spirax',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'splash' =>
        array (
            'family' => 'Splash',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'spline-sans' =>
        array (
            'family' => 'Spline Sans',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'spline-sans-mono' =>
        array (
            'family' => 'Spline Sans Mono',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'squada-one' =>
        array (
            'family' => 'Squada One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'square-peg' =>
        array (
            'family' => 'Square Peg',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sree-krushnadevaraya' =>
        array (
            'family' => 'Sree Krushnadevaraya',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sriracha' =>
        array (
            'family' => 'Sriracha',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'srisakdi' =>
        array (
            'family' => 'Srisakdi',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'staatliches' =>
        array (
            'family' => 'Staatliches',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stalemate' =>
        array (
            'family' => 'Stalemate',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stalinist-one' =>
        array (
            'family' => 'Stalinist One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stardos-stencil' =>
        array (
            'family' => 'Stardos Stencil',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'stick' =>
        array (
            'family' => 'Stick',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stick-no-bills' =>
        array (
            'family' => 'Stick No Bills',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            ),
        ),
        'stint-ultra-condensed' =>
        array (
            'family' => 'Stint Ultra Condensed',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stint-ultra-expanded' =>
        array (
            'family' => 'Stint Ultra Expanded',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stoke' =>
        array (
            'family' => 'Stoke',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            ),
        ),
        'strait' =>
        array (
            'family' => 'Strait',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'style-script' =>
        array (
            'family' => 'Style Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'stylish' =>
        array (
            'family' => 'Stylish',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sue-ellen-francisco' =>
        array (
            'family' => 'Sue Ellen Francisco',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'suez-one' =>
        array (
            'family' => 'Suez One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sulphur-point' =>
        array (
            'family' => 'Sulphur Point',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '700',
            ),
        ),
        'sumana' =>
        array (
            'family' => 'Sumana',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'sunflower' =>
        array (
            'family' => 'Sunflower',
            'variants' =>
            array (
            0 => '300',
            1 => '500',
            2 => '700',
            ),
        ),
        'sunshiney' =>
        array (
            'family' => 'Sunshiney',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'supermercado-one' =>
        array (
            'family' => 'Supermercado One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'sura' =>
        array (
            'family' => 'Sura',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'suranna' =>
        array (
            'family' => 'Suranna',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'suravaram' =>
        array (
            'family' => 'Suravaram',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'suwannaphum' =>
        array (
            'family' => 'Suwannaphum',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '700',
            4 => '900',
            ),
        ),
        'swanky-and-moo-moo' =>
        array (
            'family' => 'Swanky and Moo Moo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'syncopate' =>
        array (
            'family' => 'Syncopate',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'syne' =>
        array (
            'family' => 'Syne',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'syne-mono' =>
        array (
            'family' => 'Syne Mono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'syne-tactile' =>
        array (
            'family' => 'Syne Tactile',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tai-heritage-pro' =>
        array (
            'family' => 'Tai Heritage Pro',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'tajawal' =>
        array (
            'family' => 'Tajawal',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '700',
            5 => '800',
            6 => '900',
            ),
        ),
        'tangerine' =>
        array (
            'family' => 'Tangerine',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'tapestry' =>
        array (
            'family' => 'Tapestry',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'taprom' =>
        array (
            'family' => 'Taprom',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tauri' =>
        array (
            'family' => 'Tauri',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'taviraj' =>
        array (
            'family' => 'Taviraj',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'teko' =>
        array (
            'family' => 'Teko',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'tektur' =>
        array (
            'family' => 'Tektur',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            ),
        ),
        'telex' =>
        array (
            'family' => 'Telex',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tenali-ramakrishna' =>
        array (
            'family' => 'Tenali Ramakrishna',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tenor-sans' =>
        array (
            'family' => 'Tenor Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'text-me-one' =>
        array (
            'family' => 'Text Me One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'texturina' =>
        array (
            'family' => 'Texturina',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'thasadith' =>
        array (
            'family' => 'Thasadith',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'the-girl-next-door' =>
        array (
            'family' => 'The Girl Next Door',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'the-nautigal' =>
        array (
            'family' => 'The Nautigal',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'tienne' =>
        array (
            'family' => 'Tienne',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            2 => '900',
            ),
        ),
        'tillana' =>
        array (
            'family' => 'Tillana',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'tilt-neon' =>
        array (
            'family' => 'Tilt Neon',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tilt-prism' =>
        array (
            'family' => 'Tilt Prism',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tilt-warp' =>
        array (
            'family' => 'Tilt Warp',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'timmana' =>
        array (
            'family' => 'Timmana',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tinos' =>
        array (
            'family' => 'Tinos',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'tiro-bangla' =>
        array (
            'family' => 'Tiro Bangla',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-devanagari-hindi' =>
        array (
            'family' => 'Tiro Devanagari Hindi',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-devanagari-marathi' =>
        array (
            'family' => 'Tiro Devanagari Marathi',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-devanagari-sanskrit' =>
        array (
            'family' => 'Tiro Devanagari Sanskrit',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-gurmukhi' =>
        array (
            'family' => 'Tiro Gurmukhi',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-kannada' =>
        array (
            'family' => 'Tiro Kannada',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-tamil' =>
        array (
            'family' => 'Tiro Tamil',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'tiro-telugu' =>
        array (
            'family' => 'Tiro Telugu',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'titan-one' =>
        array (
            'family' => 'Titan One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'titillium-web' =>
        array (
            'family' => 'Titillium Web',
            'variants' =>
            array (
            0 => '200',
            1 => '200italic',
            2 => '300',
            3 => '300italic',
            4 => 'regular',
            5 => 'italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            10 => '900',
            ),
        ),
        'tomorrow' =>
        array (
            'family' => 'Tomorrow',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'tourney' =>
        array (
            'family' => 'Tourney',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'trade-winds' =>
        array (
            'family' => 'Trade Winds',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'train-one' =>
        array (
            'family' => 'Train One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'trirong' =>
        array (
            'family' => 'Trirong',
            'variants' =>
            array (
            0 => '100',
            1 => '100italic',
            2 => '200',
            3 => '200italic',
            4 => '300',
            5 => '300italic',
            6 => 'regular',
            7 => 'italic',
            8 => '500',
            9 => '500italic',
            10 => '600',
            11 => '600italic',
            12 => '700',
            13 => '700italic',
            14 => '800',
            15 => '800italic',
            16 => '900',
            17 => '900italic',
            ),
        ),
        'trispace' =>
        array (
            'family' => 'Trispace',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            ),
        ),
        'trocchi' =>
        array (
            'family' => 'Trocchi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'trochut' =>
        array (
            'family' => 'Trochut',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            ),
        ),
        'truculenta' =>
        array (
            'family' => 'Truculenta',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'trykker' =>
        array (
            'family' => 'Trykker',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'tsukimi-rounded' =>
        array (
            'family' => 'Tsukimi Rounded',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'tulpen-one' =>
        array (
            'family' => 'Tulpen One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'turret-road' =>
        array (
            'family' => 'Turret Road',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '700',
            5 => '800',
            ),
        ),
        'twinkle-star' =>
        array (
            'family' => 'Twinkle Star',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ubuntu' =>
        array (
            'family' => 'Ubuntu',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '700',
            7 => '700italic',
            ),
        ),
        'ubuntu-condensed' =>
        array (
            'family' => 'Ubuntu Condensed',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ubuntu-mono' =>
        array (
            'family' => 'Ubuntu Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'uchen' =>
        array (
            'family' => 'Uchen',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'ultra' =>
        array (
            'family' => 'Ultra',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'unbounded' =>
        array (
            'family' => 'Unbounded',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            6 => '800',
            7 => '900',
            ),
        ),
        'uncial-antiqua' =>
        array (
            'family' => 'Uncial Antiqua',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'underdog' =>
        array (
            'family' => 'Underdog',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'unica-one' =>
        array (
            'family' => 'Unica One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'unifrakturcook' =>
        array (
            'family' => 'UnifrakturCook',
            'variants' =>
            array (
            0 => '700',
            ),
        ),
        'unifrakturmaguntia' =>
        array (
            'family' => 'UnifrakturMaguntia',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'unkempt' =>
        array (
            'family' => 'Unkempt',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
        'unlock' =>
        array (
            'family' => 'Unlock',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'unna' =>
        array (
            'family' => 'Unna',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'updock' =>
        array (
            'family' => 'Updock',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'urbanist' =>
        array (
            'family' => 'Urbanist',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'vt323' =>
        array (
            'family' => 'VT323',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vampiro-one' =>
        array (
            'family' => 'Vampiro One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'varela' =>
        array (
            'family' => 'Varela',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'varela-round' =>
        array (
            'family' => 'Varela Round',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'varta' =>
        array (
            'family' => 'Varta',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            ),
        ),
        'vast-shadow' =>
        array (
            'family' => 'Vast Shadow',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vazirmatn' =>
        array (
            'family' => 'Vazirmatn',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'vesper-libre' =>
        array (
            'family' => 'Vesper Libre',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '700',
            3 => '900',
            ),
        ),
        'viaoda-libre' =>
        array (
            'family' => 'Viaoda Libre',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vibes' =>
        array (
            'family' => 'Vibes',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vibur' =>
        array (
            'family' => 'Vibur',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'victor-mono' =>
        array (
            'family' => 'Victor Mono',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '100italic',
            8 => '200italic',
            9 => '300italic',
            10 => 'italic',
            11 => '500italic',
            12 => '600italic',
            13 => '700italic',
            ),
        ),
        'vidaloka' =>
        array (
            'family' => 'Vidaloka',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'viga' =>
        array (
            'family' => 'Viga',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vina-sans' =>
        array (
            'family' => 'Vina Sans',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'voces' =>
        array (
            'family' => 'Voces',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'volkhov' =>
        array (
            'family' => 'Volkhov',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '700',
            3 => '700italic',
            ),
        ),
        'vollkorn' =>
        array (
            'family' => 'Vollkorn',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            5 => '900',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            10 => '800italic',
            11 => '900italic',
            ),
        ),
        'vollkorn-sc' =>
        array (
            'family' => 'Vollkorn SC',
            'variants' =>
            array (
            0 => 'regular',
            1 => '600',
            2 => '700',
            3 => '900',
            ),
        ),
        'voltaire' =>
        array (
            'family' => 'Voltaire',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'vujahday-script' =>
        array (
            'family' => 'Vujahday Script',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'waiting-for-the-sunrise' =>
        array (
            'family' => 'Waiting for the Sunrise',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'wallpoet' =>
        array (
            'family' => 'Wallpoet',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'walter-turncoat' =>
        array (
            'family' => 'Walter Turncoat',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'warnes' =>
        array (
            'family' => 'Warnes',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'water-brush' =>
        array (
            'family' => 'Water Brush',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'waterfall' =>
        array (
            'family' => 'Waterfall',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'wavefont' =>
        array (
            'family' => 'Wavefont',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'wellfleet' =>
        array (
            'family' => 'Wellfleet',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'wendy-one' =>
        array (
            'family' => 'Wendy One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'whisper' =>
        array (
            'family' => 'Whisper',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'windsong' =>
        array (
            'family' => 'WindSong',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            ),
        ),
        'wire-one' =>
        array (
            'family' => 'Wire One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'wix-madefor-display' =>
        array (
            'family' => 'Wix Madefor Display',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '800',
            ),
        ),
        'wix-madefor-text' =>
        array (
            'family' => 'Wix Madefor Text',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            2 => '500',
            3 => '500italic',
            4 => '600',
            5 => '600italic',
            6 => '700',
            7 => '700italic',
            8 => '800',
            9 => '800italic',
            ),
        ),
        'work-sans' =>
        array (
            'family' => 'Work Sans',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'workbench' =>
        array (
            'family' => 'Workbench',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'xanh-mono' =>
        array (
            'family' => 'Xanh Mono',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'yaldevi' =>
        array (
            'family' => 'Yaldevi',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'yanone-kaffeesatz' =>
        array (
            'family' => 'Yanone Kaffeesatz',
            'variants' =>
            array (
            0 => '200',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '600',
            5 => '700',
            ),
        ),
        'yantramanav' =>
        array (
            'family' => 'Yantramanav',
            'variants' =>
            array (
            0 => '100',
            1 => '300',
            2 => 'regular',
            3 => '500',
            4 => '700',
            5 => '900',
            ),
        ),
        'yatra-one' =>
        array (
            'family' => 'Yatra One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yellowtail' =>
        array (
            'family' => 'Yellowtail',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yeon-sung' =>
        array (
            'family' => 'Yeon Sung',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yeseva-one' =>
        array (
            'family' => 'Yeseva One',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yesteryear' =>
        array (
            'family' => 'Yesteryear',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yomogi' =>
        array (
            'family' => 'Yomogi',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'young-serif' =>
        array (
            'family' => 'Young Serif',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yrsa' =>
        array (
            'family' => 'Yrsa',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '600',
            4 => '700',
            5 => '300italic',
            6 => 'italic',
            7 => '500italic',
            8 => '600italic',
            9 => '700italic',
            ),
        ),
        'ysabeau' =>
        array (
            'family' => 'Ysabeau',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'ysabeau-infant' =>
        array (
            'family' => 'Ysabeau Infant',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'ysabeau-office' =>
        array (
            'family' => 'Ysabeau Office',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            9 => '100italic',
            10 => '200italic',
            11 => '300italic',
            12 => 'italic',
            13 => '500italic',
            14 => '600italic',
            15 => '700italic',
            16 => '800italic',
            17 => '900italic',
            ),
        ),
        'ysabeau-sc' =>
        array (
            'family' => 'Ysabeau SC',
            'variants' =>
            array (
            0 => '100',
            1 => '200',
            2 => '300',
            3 => 'regular',
            4 => '500',
            5 => '600',
            6 => '700',
            7 => '800',
            8 => '900',
            ),
        ),
        'yuji-boku' =>
        array (
            'family' => 'Yuji Boku',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yuji-hentaigana-akari' =>
        array (
            'family' => 'Yuji Hentaigana Akari',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yuji-hentaigana-akebono' =>
        array (
            'family' => 'Yuji Hentaigana Akebono',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yuji-mai' =>
        array (
            'family' => 'Yuji Mai',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yuji-syuku' =>
        array (
            'family' => 'Yuji Syuku',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'yusei-magic' =>
        array (
            'family' => 'Yusei Magic',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zcool-kuaile' =>
        array (
            'family' => 'ZCOOL KuaiLe',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zcool-qingke-huangyou' =>
        array (
            'family' => 'ZCOOL QingKe HuangYou',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zcool-xiaowei' =>
        array (
            'family' => 'ZCOOL XiaoWei',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zen-antique' =>
        array (
            'family' => 'Zen Antique',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zen-antique-soft' =>
        array (
            'family' => 'Zen Antique Soft',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zen-dots' =>
        array (
            'family' => 'Zen Dots',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zen-kaku-gothic-antique' =>
        array (
            'family' => 'Zen Kaku Gothic Antique',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '700',
            4 => '900',
            ),
        ),
        'zen-kaku-gothic-new' =>
        array (
            'family' => 'Zen Kaku Gothic New',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '700',
            4 => '900',
            ),
        ),
        'zen-kurenaido' =>
        array (
            'family' => 'Zen Kurenaido',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zen-loop' =>
        array (
            'family' => 'Zen Loop',
            'variants' =>
            array (
            0 => 'regular',
            1 => 'italic',
            ),
        ),
        'zen-maru-gothic' =>
        array (
            'family' => 'Zen Maru Gothic',
            'variants' =>
            array (
            0 => '300',
            1 => 'regular',
            2 => '500',
            3 => '700',
            4 => '900',
            ),
        ),
        'zen-old-mincho' =>
        array (
            'family' => 'Zen Old Mincho',
            'variants' =>
            array (
            0 => 'regular',
            1 => '500',
            2 => '600',
            3 => '700',
            4 => '900',
            ),
        ),
        'zen-tokyo-zoo' =>
        array (
            'family' => 'Zen Tokyo Zoo',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zeyada' =>
        array (
            'family' => 'Zeyada',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zhi-mang-xing' =>
        array (
            'family' => 'Zhi Mang Xing',
            'variants' =>
            array (
            0 => 'regular',
            ),
        ),
        'zilla-slab' =>
        array (
            'family' => 'Zilla Slab',
            'variants' =>
            array (
            0 => '300',
            1 => '300italic',
            2 => 'regular',
            3 => 'italic',
            4 => '500',
            5 => '500italic',
            6 => '600',
            7 => '600italic',
            8 => '700',
            9 => '700italic',
            ),
        ),
        'zilla-slab-highlight' =>
        array (
            'family' => 'Zilla Slab Highlight',
            'variants' =>
            array (
            0 => 'regular',
            1 => '700',
            ),
        ),
    );

	if ( !empty($bx_google_fonts_static) ) {
		foreach( $bx_google_fonts_static as $slug => $font ) {
            if ( $slug != 'system' && $slug != 'system-font-wordpress-default' ) {
                $key = sanitize_title_with_dashes( $font['family'] );

    			$bx_font_simple_array[$key] = esc_html( $font['family'] );
    			$bx_font_array[$key]['family'] = esc_html( $font['family'] );
    			$bx_font_array[$key]['variants'] = $font['variants'];
            }
        }

		if ( $type == 'simple' ) {
			return $bx_font_simple_array;
        } else {
			return $bx_font_array;
        }
    }

	return $bx_font_array;
}

// get_header_image_tag callback
function bx_get_header_image_tag( $html, $header, $attr ) {
	return '<img src="'.$attr['src'].'" width="'.$attr['width'].'" height="'.$attr['height'].'" alt="'.$attr['alt'].'" srcset="'.$attr['srcset'].'" sizes="'.$attr['sizes'].'">';
};
add_filter( 'get_header_image_tag', 'bx_get_header_image_tag', 10, 3 );

function bx_get_custom_logo( $html, $blog_id ) {

	$html = '';
    $switched_blog = false;

    if ( is_multisite() && ! empty( $blog_id ) && (int) $blog_id !== get_current_blog_id() ) {
        switch_to_blog( $blog_id );
        $switched_blog = true;
    }

    $custom_logo_id = get_theme_mod( 'custom_logo' );

    // We have a logo. Logo is go.
    if ( $custom_logo_id ) {
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$logo_height = $logo[2] / 2; $logo_pos = $logo_height / 2;
        $html = sprintf( '<a href="%1$s" id="basil-logo" class="custom-logo-link" style="margin-top:-' . $logo_pos . 'px; width:auto; height:' . $logo_height . 'px;" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
                'itemprop' => 'logo',
            ) )
        );
    }
    // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
    elseif ( is_customize_preview() ) {
	    $html = '';
        $html = sprintf( '<h1 id="basil-logo" class="custom-logo-link"><a href="%1$s">' . get_bloginfo('name') . '<img class="custom-logo"/></a></h1>',
            esc_url( home_url( '/' ) )
        );
    }

    if ( $switched_blog ) {
        restore_current_blog();
    }

    return $html;
}
add_filter( 'get_custom_logo', 'bx_get_custom_logo', 10, 2 );

/**
 * Header Markup (to support WP 4.6 and lower)
 */
function bx_custom_header_markup() {
	if ( get_header_image() ) {
		$custom_markup = '<div id="wp-custom-header" class="wp-custom-header">';
		$custom_markup .= get_header_image_tag();
		$custom_markup .= '</div>';
		return $custom_markup;
    } else {
		return false;
    }
}

/**
 * Theme Path DIR (_theme)
 */
function bx_theme_file_path( $file_path ) {
	if ( function_exists('get_theme_file_path') ) {
		return get_theme_file_path( '_theme/' . $file_path );
    } else {
		return BX_THEME_DIR . $file_path;
    }
}

/**
 * Theme Path DIR (_theme)
 */
function bx_fw_file_path( $file_path ) {
	if ( function_exists('get_theme_file_path') ) {
		return get_theme_file_path( '_framework/' . $file_path );
    } else {
		return BX_FW_DIR . $file_path;
    }
}

/**
 * Theme Path URL (_theme)
 */
function bx_theme_file_uri( $file_path ) {
	if ( function_exists('get_theme_file_uri') ):
		return get_theme_file_uri( '_theme/' . $file_path );
	else:
		return BX_THEME_URL . $file_path;
	endif;
}

/**
 * Framework Path URL (_framework)
 */
function bx_fw_file_uri( $file_path ){
	if ( function_exists('get_theme_file_uri') ):
		return get_theme_file_uri( '_framework/' . $file_path );
	else:
		return BX_FW_URL . $file_path;
	endif;
}

/**
 * Social Icons
 */
function bx_social_icons() {
	global $bx_options;

	foreach ( $bx_options as $id => $value ):
		if ( $value && strpos($id, 'bx_socials') !== false ):
			$id = explode( '_', $id );
			$id = $id[2];
			echo '<a href="'.$value.'" class="bx-social-icon"><i class="fab fa-'.$id.'"></i></a>';
		endif;
	endforeach;
}

/**
 * Add Item to Menu
 */
function bx_custom_nav_menu_item( $title, $url, $order = 0, $parent = 0, $classes = array() ){
	$item = new stdClass();
	$item->ID = 1000000 + $order + $parent;
	$item->db_id = $item->ID;
	$item->title = $title;
	$item->url = $url;
	$item->menu_order = $order;
	$item->menu_item_parent = $parent;
	$item->type = '';
	$item->object = '';
	$item->object_id = '';
	$item->classes = $classes;
	$item->target = '';
	$item->attr_title = '';
	$item->description = '';
	$item->xfn = '';
	$item->status = '';
	return $item;
}

/**
 * Post Thumbnail
 */
function bx_post_thumbnail( $thumb_name = false ){

	$thumb_name = !$thumb_name ? 'post-thumbnail' : $thumb_name;

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	ob_start();
	the_post_thumbnail( $thumb_name, array( 'title' => the_title_attribute( 'echo=0' ) ) );
	return ob_get_clean();
}

/**
 * Post Thumbnail URL
 */
function bx_post_thumbnail_url( $thumb_name = false ){

	$thumb_name = !$thumb_name ? 'post-thumbnail' : $thumb_name;

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	$thumbnail_url = get_the_post_thumbnail_url( null, $thumb_name );
	return $thumbnail_url;
}

/**
 * Breadcrumbs
 */
function bx_breadcrumbs() {

    // Get the query & post information
    global $post,$wp_query,$bx_options;

    if ( !empty($post) ):
        $bx_page_settings = get_post_meta( $post->ID, '_basil_page_settings', true);
    else:
        $bx_page_settings = false;
    endif;

    $default_option = ( isset( $bx_options['basil_breadcrumbs'] ) ? $bx_options['basil_breadcrumbs'] : 'enabled' );
    $crumbs_setting = ( isset( $bx_page_settings['breadcrumbs'] ) && $bx_page_settings['breadcrumbs'] ? $bx_page_settings['breadcrumbs'] : false );

    if ( $crumbs_setting == 'enabled' || !$crumbs_setting && $default_option == 'enabled' ):

        // Settings
        $separator          = '<i class="fas fa-fw fa-angle-right"></i>';
        $breadcrums_id      = 'bx-breadcrumbs';
        $breadcrums_class   = 'bx-breadcrumbs';
        $home_title         = esc_html_x('Home','Home Breadcrumb','basil');

        // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
        $custom_taxonomy    = 'product_cat';

        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="bx-item-home"><a class="bx-bread-link bx-bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="bx-separator bx-separator-home"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            //echo '<li class="bx-item-current bx-item-archive"><span class="bx-bread-current bx-bread-archive">' . post_type_archive_title(false,false) . '</span></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="bx-item-cat bx-item-custom-post-type-' . $post_type . '"><a class="bx-bread-cat bx-bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            //echo '<li class="bx-item-current bx-item-archive"><span class="bx-bread-current bx-bread-archive">' . $custom_tax_name . '</span></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="bx-item-cat bx-item-custom-post-type-' . $post_type . '"><a class="bx-bread-cat bx-bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $cat_array_vals = array_values($category);
                $last_category = end( $cat_array_vals );

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="bx-item-cat">' . $parents . '</li>';
                    $cat_display .= '<li class="bx-separator"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                if ( !empty($taxonomy_terms) ):
                    $cat_id         = $taxonomy_terms[0]->term_id;
                    $cat_nicename   = $taxonomy_terms[0]->slug;
                    $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                    $cat_name       = $taxonomy_terms[0]->name;
                endif;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="bx-item-cat bx-item-cat-' . $cat_id . ' bx-item-cat-' . $cat_nicename . '"><a class="bx-bread-cat bx-bread-cat-' . $cat_id . ' bx-bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            } else {

                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            }

        } else if ( is_category() ) {

            // Category page
            //echo '<li class="bx-item-current bx-item-cat"><span class="bx-bread-current bx-bread-cat">' . single_cat_title('', false) . '</span></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="bx-item-parent bx-item-parent-' . $ancestor . '"><a class="bx-bread-parent bx-bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="bx-separator bx-separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><strong title="' . esc_attr( get_the_title() ) . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            //echo '<li class="bx-item-current bx-item-tag-' . $get_term_id . ' bx-item-tag-' . $get_term_slug . '"><span class="bx-bread-current bx-bread-tag-' . $get_term_id . ' bx-bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="bx-item-year bx-item-year-' . get_the_time('Y') . '"><a class="bx-bread-year bx-bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="bx-item-month bx-item-month-' . get_the_time('m') . '"><a class="bread-month bx-bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('M') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
           // echo '<li class="bx-item-current bx-item-' . get_the_time('j') . '"><span class="bx-bread-current bx-bread-' . get_the_time('j') . '"> ' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('jS') . ' ' . get_the_time('M') ) . '</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="bx-item-year bx-item-year-' . get_the_time('Y') . '"><a class="bx-bread-year bx-bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="bx-item-month bx-item-month-' . get_the_time('m') . '"><span class="bx-bread-month bx-bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('M') ) . '</span></li>';

        } else if ( is_year() ) {

            // Display year archive
            //echo '<li class="bx-item-current bx-item-current-' . get_the_time('Y') . '"><span class="bx-bread-current bx-bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</span></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            //echo '<li class="bx-item-current bx-item-current-' . $userdata->user_nicename . '"><span class="bx-bread-current bx-bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . sprintf( esc_html__( 'Author: %s', 'basil' ), $userdata->display_name ) . '</span></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            //echo '<li class="bx-item-current bx-item-current-' . get_query_var('paged') . '"><span class="bx-bread-current bx-bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">' . sprintf( esc_html__( 'Page %s', 'basil' ), get_query_var('paged') ) . '</span></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="bx-item-current bx-item-current-' . get_search_query() . '"><span class="bx-bread-current bx-bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">' . sprintf( esc_html__( 'Search results for: "%s"', 'basil' ), get_search_query() ) . '</span></li>';

        } elseif ( is_404() ) {

            // 404 page

        }

        echo '</ul>';

    endif;
    return false;
}

function bx_comments() {
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}
