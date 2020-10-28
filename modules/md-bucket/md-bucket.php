<?php

class MDBBBucket extends FLBuilderModule
{
    public function __construct()
    {
        parent::__construct(array(
            'name' => __('Bucket', 'fl-builder'),
            'description' => __('Make a "bucket" - a column suitable for calling attention to major website features.', 'fl-builder'),
            'category' => __('Mopdog Modules', 'fl-builder'),
            'dir' => MOPDOGBB_DIR . 'modules/md-bucket',
            'url' => MOPDOGBB_URL . 'modules/md-bucket',
            'icon' => 'layout.svg',
        ));
    }
};

FLBuilder::register_module('MDBBBucket', array(
    'general'  => array(
        'title' => __('General', 'fl-builder'),
        'sections' => array(
            'content' => array(
                'title' => __('Content', 'fl-builder'),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Heading', 'fl-builder'),
                        'help' => __('Heading text', 'fl-builder')
                    ),
                    'description' => array(
                        'type' => 'text',
                        'label' => __('Description', 'fl-builder'),
                        'help' => __('Additional text', 'fl-builder')
                    )
                )
            )
        )
    )
));
