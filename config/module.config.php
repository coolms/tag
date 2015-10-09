<?php
/**
 * CoolMS2 Tag Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/tag for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsTag;

return [
    'controllers' => [
        'invokables' => [
            'CmsTag\Controller\Admin' => 'CmsTag\Controller\AdminController',
        ],
    ],
    'form_elements' => [
        'aliases' => [
            'CmsTag\Entity\Tag' => 'CmsTag\Form\Tag',
        ],
        'invokables' => [
            'CmsTag\Form\Tag'           => 'CmsTag\Form\Tag',
            'CmsTag\Form\TagFieldset'   => 'CmsTag\Form\TagFieldset',
        ],
    ],
    'router' => [
        'routes' => [
            
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type'          => 'gettext',
                'base_dir'      => __DIR__ . '/../language',
                'pattern'       => '%s.mo',
                'text_domain'   => __NAMESPACE__,
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],
];
