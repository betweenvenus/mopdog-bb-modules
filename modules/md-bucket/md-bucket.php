<?php

class MDBBBucket extends FLBuilderModule
{
    public function __construct()
    {
        parent::__construct(array(
            'name' => __('Bucket', 'fl-builder'),
            'description' => __('Make a "bucket" - a column suitable for calling attention to major website features.', 'fl-builder'),
            'category' => __('Mopdog Modules', 'fl-builder'),
            'dir' => MOPDOGBB_DIR . 'modules/md-bucket/',
            'url' => MOPDOGBB_URL . 'modules/md-bucket/',
            'icon' => 'layout.svg',
            'partial_refresh' => true
        ));
    }
};

FLBuilder::register_module('MDBBBucket', array(
    'general'  => array(
        'title' => __('General', 'fl-builder'),
        'sections' => array(
            'bucket-heading' => array(
                'title' => __('Heading', 'fl-builder'),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Heading Text', 'fl-builder'),
                    ),
                    'heading_alignment' => array(
                        'type'    => 'align',
                        'label'   => 'Heading Alignment',
                        'default' => 'center',
                        'preview' => array(
                            'type'       => 'css',
                            'selector'   => '.mdbb-bucket-heading',
                            'property'   => 'text-align',
                        ),
                    ),
                    'heading_tag' => array(
                        'type' => 'select',
                        'label' => __('Heading Level', 'fl-builder'),
                        'default' => 'h1',
                        'options' => array(
                            'h1' => __('Heading 1', 'fl-builder'),
                            'h2' => __('Heading 2', 'fl-builder'),
                            'h3' => __('Heading 3', 'fl-builder'),
                            'h4' => __('Heading 4', 'fl-builder'),
                            'h5' => __('Heading 5', 'fl-builder'),
                            'h6' => __('Heading 6', 'fl-builder')
                        )
                    ),
                )
            ),
            'bucket-description' => array(
                'title' => __('Description', 'fl-builder'),
                'fields' => array(
                    'description' => array(
                        'type' => 'text',
                        'label' => __('Description', 'fl-builder'),
                        'help' => __('Additional text', 'fl-builder')
                    )
                )
            ),
            'bucket-background' => array(
                'title' => __('Background', 'fl-builder'),
                'fields' => array(
                    'background_type' => array(
                        'type' => 'select',
                        'label' => __('Background Type', 'fl-builder'),
                        'default' => 'none',
                        'options' => array(
                            'none' => __('None', 'fl-builder'),
                            'image' => __('Image', 'fl-builder'),
                            'solid-color' => __('Solid Color', 'fl-builder'),
                            'gradient' => __('Gradient', 'fl-builder'),
                        ),
                        'toggle' => array(
                            'none' => array(
                                'sections' => array(),
                            ),
                            'image' => array(
                                'sections' => array('bucket-background-config'),
                                'fields' => array('bucket_background_image')
                            ),
                            'solid-color' => array(
                                'sections' => array('bucket-background-config'),
                                'fields' => array('bucket_background_solid_color')
                            ),
                            'gradient' => array(
                                'sections' => array('bucket-background-config'),
                                'fields' => array('bucket_background_gradient')
                            ),
                        )
                    )
                )
            ),
            'bucket-background-config' => array(
                'title' => __('Background Settings', 'fl-builder'),
                'fields' => array(
                    'bucket_background_image' => array(
                        'type' => 'photo',
                        'label' => __('Background Image', 'fl-builder'),
                    ),
                    'bucket_background_solid_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'fl-builder'),
                    ),
                    'bucket_background_gradient' => array(
                        'type' => 'gradient',
                        'label' => __('Background Gradient', 'fl-builder'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => 'mdbb-bucket',
                            'property' => 'background-image'
                        )
                    )
                ),
            ),
            'padding' => array(
                'title' => __('Padding', 'fl-builder'),
                'fields' => array(
                    'bucket_padding' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'fl-builder'),
                        'units' => array('px', '%', 'rem', 'em')
                    )
                )
            )
        )
    )
));
