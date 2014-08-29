<?php
/**
 * Created by IntelliJ IDEA.
 * User: filiperp
 * Date: 8/29/14
 * Time: 10:58 AM
 */


return array(
    'title' => 'Upload your ffimages',

    'attributes' => array(
        'enctype' => 'multipart/form-data',
    ),

    'elements' => array(
        'image' => array(
            'type' => 'file',
        ),
    ),

    'buttons' => array(
        'reset' => array(
            'type' => 'reset',
            'label' => 'Reset',
        ),
        'submit' => array(
            'type' => 'submit',
            'label' => 'Upload',
        ),
    ),
);


