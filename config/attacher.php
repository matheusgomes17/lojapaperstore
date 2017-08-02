<?php
# config/attacher.php

return [
    'model'        => 'Artesaos\Attacher\AttacherModel', # You can customize the model for your needs.
    'base_url'     => '', # The url basis for the representation of images.
    'path'         => '/uploads/images/:style/:filename', # Change the path where the images are stored.

    # Where the magic happens.
    # This is where you record what the "styles" that will apply to your image.
    # Each style takes as the parameter is one \Intervention\Image\Image
    # See more in http://image.intervention.io/
    'style_guides' => [
        'default' => [
            'breadcrumb' => function ($image) {
                $image->resize(1920, 300);

                return $image;
            },
            'cover' => function ($image) {
                $image->resize(250, 300);

                return $image;
            },
            'slider' => function ($image) {
                $image->resize(1920, 700);

                return $image;
            },
            'thumbnail' => function ($image) {
                $image->resize(150, 150);

                return $image;
            },
            'zoom' => function ($image) {
                $image->resize(900, 1024);

                return $image;
            },
        ],
    ],
];
