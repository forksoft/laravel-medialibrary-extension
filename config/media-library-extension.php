<?php

return [

    /* -----------------------------------------------------------------
     |  Medialibrary extension settings
     | -----------------------------------------------------------------
     */
    'filename_generator' => \Fomvasss\MediaLibraryExtension\FilenameGenerators\DefaultFileNameGenerator::class,

    'default_img_quantity' => 85,

    /* ----------------------------------------------------------------
     |  Make conversions for all medias
     | ----------------------------------------------------------------
     */
    'default_conversions' => [
        'thumb' => [
            'quantity' => 75,
            'crop-method' => Spatie\Image\Enums\CropPosition::Center,
            'width' => 100,
            'height' => 100,
            'regex_perform_to_collections' => '/img|image|photo|gallery|scr|avatar/i',
        ],
    ],
    
    'field_suffixes' => [
        'weight' => '_weight',   // request('YOUR_COLLECTION_NAME_weight')
        'deleted' => '_deleted', // request('YOUR_COLLECTION_NAME_deleted')
    ],
    
    'deleted_request_input' => 'media_deleted', // request('media_deleted')

    'use_auth_user' => false, // save user_id to media

    'use_db_media_key' => 'id', // id or uuid !Deprecated

    /*
     *  id int|null
     *  file|null File for upload. If empty - update Media fields
     *  is_active=true boolean sometimes
     *  is_main=false boolean sometimes
     *  weight int sometimes
     *  title string sometimes (custom_propertie)
     *  alt string sometimes (custom_propertie)
     *  delete boolean sometimes If true - delete the media
     */
    'expand' => [
        'allowed_custom_properties' => [
            'alt', 'title',  
        ],
    ],
];
