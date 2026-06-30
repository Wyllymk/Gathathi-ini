<?php
/**
 * ACF Local Field Groups — registers all editable fields without JSON import.
 * Only runs when Advanced Custom Fields (free or Pro) is active.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

/* ── HOMEPAGE ────────────────────────────────────────────── */
acf_add_local_field_group([
    'key'      => 'group_homepage',
    'title'    => 'Homepage Content',
    'location' => [[ ['param'=>'page_type','operator'=>'==','value'=>'front_page'] ]],
    'fields'   => [
        [ 'key'=>'field_hero_headline',    'label'=>'Hero Headline (HTML allowed)',       'name'=>'hero_headline',    'type'=>'textarea', 'rows'=>3 ],
        [ 'key'=>'field_hero_subtext',     'label'=>'Hero Subtext',                       'name'=>'hero_subtext',     'type'=>'textarea', 'rows'=>3 ],
        [ 'key'=>'field_hero_cta_primary', 'label'=>'Hero CTA — Primary Label',           'name'=>'hero_cta_primary', 'type'=>'text'  ],
        [ 'key'=>'field_hero_cta_second',  'label'=>'Hero CTA — Secondary Label',         'name'=>'hero_cta_second',  'type'=>'text'  ],
        [ 'key'=>'field_hero_image',       'label'=>'Hero Background Image',              'name'=>'hero_image',       'type'=>'image', 'return_format'=>'url' ],
        [ 'key'=>'field_stat_1_num',       'label'=>'Stat 1 — Number (e.g. 57.)',         'name'=>'stat_1_num',       'type'=>'text'  ],
        [ 'key'=>'field_stat_1_label',     'label'=>'Stat 1 — Label',                    'name'=>'stat_1_label',     'type'=>'text'  ],
        [ 'key'=>'field_stat_2_num',       'label'=>'Stat 2 — Number',                   'name'=>'stat_2_num',       'type'=>'text'  ],
        [ 'key'=>'field_stat_2_label',     'label'=>'Stat 2 — Label',                    'name'=>'stat_2_label',     'type'=>'text'  ],
        [ 'key'=>'field_stat_3_num',       'label'=>'Stat 3 — Number',                   'name'=>'stat_3_num',       'type'=>'text'  ],
        [ 'key'=>'field_stat_3_label',     'label'=>'Stat 3 — Label',                    'name'=>'stat_3_label',     'type'=>'text'  ],
        [ 'key'=>'field_stat_4_num',       'label'=>'Stat 4 — Number',                   'name'=>'stat_4_num',       'type'=>'text'  ],
        [ 'key'=>'field_stat_4_label',     'label'=>'Stat 4 — Label',                    'name'=>'stat_4_label',     'type'=>'text'  ],
        [ 'key'=>'field_identity_heading', 'label'=>'Identity Section — Heading',         'name'=>'identity_heading', 'type'=>'textarea','rows'=>2 ],
        [ 'key'=>'field_identity_body',    'label'=>'Identity Section — Body Text',       'name'=>'identity_body',    'type'=>'textarea','rows'=>5 ],
        [ 'key'=>'field_principal_quote',  'label'=>'Principal Quote',                   'name'=>'principal_quote',  'type'=>'textarea','rows'=>4 ],
        [ 'key'=>'field_principal_image',  'label'=>'Principal Photo',                   'name'=>'principal_image',  'type'=>'image',   'return_format'=>'url' ],
        [ 'key'=>'field_admissions_cta',   'label'=>'Admissions CTA — Heading',          'name'=>'admissions_cta',   'type'=>'textarea','rows'=>2 ],
        [ 'key'=>'field_admissions_sub',   'label'=>'Admissions CTA — Subtext',          'name'=>'admissions_sub',   'type'=>'textarea','rows'=>3 ],
    ],
]);

/* ── ABOUT PAGE ──────────────────────────────────────────── */
acf_add_local_field_group([
    'key'      => 'group_about',
    'title'    => 'About Page Content',
    'location' => [[ ['param'=>'page_template','operator'=>'==','value'=>'template-about.php'] ]],
    'fields'   => [
        [ 'key'=>'field_about_story',           'label'=>'School Story (paragraphs)',        'name'=>'about_story',           'type'=>'wysiwyg' ],
        [ 'key'=>'field_principal_full_message', 'label'=>'Principal Full Message',           'name'=>'principal_full_message','type'=>'wysiwyg' ],
        [ 'key'=>'field_principal_name',         'label'=>'Principal Name',                  'name'=>'principal_name',        'type'=>'text'    ],
        [ 'key'=>'field_about_principal_photo',  'label'=>'Principal Photo',                 'name'=>'about_principal_photo', 'type'=>'image',  'return_format'=>'url' ],
        [ 'key'=>'field_mission_text',           'label'=>'Mission Statement',               'name'=>'mission_text',          'type'=>'textarea','rows'=>3 ],
        [ 'key'=>'field_vision_text',            'label'=>'Vision Statement',                'name'=>'vision_text',           'type'=>'textarea','rows'=>3 ],
        [
            'key'         => 'field_timeline',
            'label'       => 'School Timeline',
            'name'        => 'timeline',
            'type'        => 'repeater',
            'button_label'=> 'Add Milestone',
            'sub_fields'  => [
                [ 'key'=>'field_tl_year',  'label'=>'Year/Era', 'name'=>'year',  'type'=>'text' ],
                [ 'key'=>'field_tl_title', 'label'=>'Title',    'name'=>'title', 'type'=>'text' ],
                [ 'key'=>'field_tl_desc',  'label'=>'Description','name'=>'desc','type'=>'textarea','rows'=>3 ],
            ],
        ],
    ],
]);

/* ── ADMISSIONS PAGE ─────────────────────────────────────── */
acf_add_local_field_group([
    'key'      => 'group_admissions',
    'title'    => 'Admissions Content',
    'location' => [[ ['param'=>'page_template','operator'=>'==','value'=>'template-admissions.php'] ]],
    'fields'   => [
        [ 'key'=>'field_adm_welcome',    'label'=>'Welcome Quote',           'name'=>'adm_welcome',    'type'=>'textarea','rows'=>3 ],
        [ 'key'=>'field_adm_fees_text',  'label'=>'Fees Section Body Text',  'name'=>'adm_fees_text',  'type'=>'wysiwyg' ],
        [ 'key'=>'field_adm_dates_note', 'label'=>'Key Dates Footnote',      'name'=>'adm_dates_note', 'type'=>'text' ],
        [
            'key'         => 'field_faqs',
            'label'       => 'FAQs',
            'name'        => 'faqs',
            'type'        => 'repeater',
            'button_label'=> 'Add FAQ',
            'sub_fields'  => [
                [ 'key'=>'field_faq_q', 'label'=>'Question', 'name'=>'question', 'type'=>'text' ],
                [ 'key'=>'field_faq_a', 'label'=>'Answer',   'name'=>'answer',   'type'=>'textarea','rows'=>3 ],
            ],
        ],
    ],
]);

/* ── CONTACT PAGE ────────────────────────────────────────── */
acf_add_local_field_group([
    'key'      => 'group_contact',
    'title'    => 'Contact Page Content',
    'location' => [[ ['param'=>'page_template','operator'=>'==','value'=>'template-contact.php'] ]],
    'fields'   => [
        [ 'key'=>'field_contact_phone',    'label'=>'Phone Number',       'name'=>'contact_phone',    'type'=>'text', 'default_value'=>'0725 407 132' ],
        [ 'key'=>'field_contact_email',    'label'=>'Email Address',      'name'=>'contact_email',    'type'=>'email','default_value'=>'gathathiinisecondary122@gmail.com' ],
        [ 'key'=>'field_contact_address',  'label'=>'Physical Address',   'name'=>'contact_address',  'type'=>'textarea','rows'=>3, 'default_value'=>"P.O. Box 122-10100, Nyeri\nKirurumi, Tetu Sub-County\nNyeri County, Kenya" ],
        [ 'key'=>'field_contact_map_url',  'label'=>'Google Maps Embed URL','name'=>'contact_map_url','type'=>'url' ],
        [ 'key'=>'field_office_hours',     'label'=>'Office Hours Text',  'name'=>'office_hours',     'type'=>'textarea','rows'=>4 ],
    ],
]);

/* ── SITE-WIDE OPTIONS (ACF Options page) ────────────────── */
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page([
        'page_title' => 'School Settings',
        'menu_title' => 'School Settings',
        'menu_slug'  => 'gathathiini-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);

    acf_add_local_field_group([
        'key'      => 'group_site_options',
        'title'    => 'School Settings',
        'location' => [[ ['param'=>'options_page','operator'=>'==','value'=>'gathathiini-settings'] ]],
        'fields'   => [
            [ 'key'=>'field_school_phone',   'label'=>'School Phone',   'name'=>'school_phone',   'type'=>'text',  'default_value'=>'0703 639 230' ],
            [ 'key'=>'field_school_email',   'label'=>'School Email',   'name'=>'school_email',   'type'=>'email', 'default_value'=>'gathathiini122@gmail.com' ],
            [ 'key'=>'field_school_address', 'label'=>'School Address', 'name'=>'school_address', 'type'=>'textarea','rows'=>3,'default_value'=>"P.O. Box 122-10100, Nyeri\nKirurumi, Tetu Sub-County\nNyeri County, Kenya" ],
            [ 'key'=>'field_facebook_url',   'label'=>'Facebook URL',   'name'=>'facebook_url',   'type'=>'url' ],
            [ 'key'=>'field_instagram_url',  'label'=>'Instagram URL',  'name'=>'instagram_url',  'type'=>'url' ],
            [ 'key'=>'field_youtube_url',    'label'=>'YouTube URL',    'name'=>'youtube_url',    'type'=>'url' ],
            [ 'key'=>'field_whatsapp_num',   'label'=>'WhatsApp Number (digits only, e.g. 254703639230)', 'name'=>'whatsapp_num', 'type'=>'text', 'default_value'=>'254703639230' ],
        ],
    ]);
}