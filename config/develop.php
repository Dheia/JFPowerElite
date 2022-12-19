<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Decompile backend assets
    |--------------------------------------------------------------------------
    |
    | Enabling this will load all individual backend asset files, instead of
    | loading the compiled asset files generated by `winter:util compile
    | assets`. This is useful only for development purposes, and should not be
    | enabled in production. Please note that enabling this will make the
    | Backend load a LOT of individual asset files.
    |
    | true  - allow decompiled backend assets
    |
    | false - use compiled backend assets (default)
    |
    */

    'decompileBackendAssets' => false,

    /*
    |--------------------------------------------------------------------------
    | Allow deep-level symlinks
    |--------------------------------------------------------------------------
    |
    | Winter CMS, by default, will allow symlinks within the first level of
    | subdirectories. When this feature is enabled, the system will allow
    | symlinks to be used at any directory level. This can be useful for
    | symlinking individual plugins or themes.
    |
    | Please note that this has a negative effect on performance. This feature
    | abides by "cms.restrictBaseDir" - if enabled, symlinks cannot point to
    | resources outside of the root folder.
    |
    | true  - allow symlinks at any level
    |
    | false - only allow symlinks at the first level of subdirectories (default)
    |
    */

    'allowDeepSymlinks' => false,

    /*
    |--------------------------------------------------------------------------
    | Enable Snowboard debugging
    |--------------------------------------------------------------------------
    |
    | By default, Snowboard debugging and client-side logging will be enabled
    | if the application is in debug mode (via `app.debug`).
    |
    | If you wish to control Snowboard debugging independently, you may instead
    | set this value to `true` or `false` to enable or disable Snowboard
    | debugging, respectively.
    |
    */

    'debugSnowboard' => env('APP_DEBUG', true),
];
