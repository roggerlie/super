<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public)
    |
    */
    'dir' => ['files'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem disks (Flysytem)
    |--------------------------------------------------------------------------
    |
    | Define an array of Filesystem disks, which use Flysystem.
    | You can set extra options, example:
    |
    | 'my-disk' => [
    |        'URL' => url('to/disk'),
    |        'alias' => 'Local storage',
    |    ]
    */
    'disks' => [],

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */

    'route' => [
        'prefix' => 'filemanager',
        'middleware' => array('web', 'auth'), //Set to null to disable middleware filter
    ],

    /*
    |--------------------------------------------------------------------------
    | Access filter
    |--------------------------------------------------------------------------
    |
    | Filter callback to check the files
    |
    */

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */

    'roots' => array(
        array(
            'driver'        => 'LocalFileSystem', // driver for accessing file system (REQUIRED)
            'path'          => public_path() . '/storage', // path to files (REQUIRED)
            // 'URL'           => public_path() . '/storage',
            'alias'         => 'Data Assets', // The name to replace your actual path name. (OPTIONAL)
            'accessControl' => 'access',
            'attributes' => array(
                array(  // example for lock all .jpg files
                    'pattern' => '/.+/',
                    'read'   => true,
                    'write'  => false,
                    'locked' => false,
                    'hidden' => false
                ),
                // array(    // example for lock all dir and file
                //     'pattern' => '/.+/',
                //     'read'   => true,
                //     'write'  => false,
                //     'locked' => false,
                //     'hidden' => false
                // ),
                // array(    // example for lock single folder
                //     'pattern'   => '!^/images!',
                //     'read'      => true,
                //     'write'     => false,
                //     'locked'    => false,
                //     'hidden'    => false
                // ),
                // array(  // example for lock all .jpg files
                //     'pattern'   => '/.jpg+/',
                //     'locked'    => true
                // ),
                // array(  // example for lock all .png files
                //     'pattern'   => '/.png+/',
                //     'locked'    => true
                // ),
                // array(  // example for lock all .gif files
                //     'pattern'   => '/.gif+/',
                //     'locked'    => true
                // ),
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with 'roots' and passed to the Connector.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1
    |
    */

    'options' => array(),

    /*
    |--------------------------------------------------------------------------
    | Root Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with every root by default.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1#root-options
    |
    */
    'root_options' => array(),

);
