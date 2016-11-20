<?php
return array(
    
    // ---------------------------------------------------------------
    // Controllers desse módulo
    // ---------------------------------------------------------------
    
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Admin' => 'Admin\Controller\AdminController',
        ),
    ),
    'router' => array(
        'routes' => array(
            
            // ----------------------------------------------------------------
            // Rotas da aplicação do admin
            // ----------------------------------------------------------------
            
            // Rodas da HOME do admin
                'home_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'index',
                        ),
                    ),
                ),
                'update_home_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'verb'      => 'post',
                        'route'    => '/Admin/update',
                        'defaults'  => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'updateIndex',
                        ),
                    ),
                ),
            
            // Rodas de ELEIÇÕES do admin
                'eleições_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/Eleicoes',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'eleicao',
                        ),
                    ),
                ),
                'update_eleições_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/EleicoesUpdate',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'updateEleicao',
                        ),
                    ),
                ),
            
            // Rodas de VOTOS do admin
                'votos_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/Votos',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'voto',
                        ),
                    ),
                ),
                'update_votos_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/VotosUpdate',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'updateVoto',
                        ),
                    ),
                ),
            
            // Rodas de CARGOS do admin
                'cargos_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/Cargos',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'cargo',
                        ),
                    ),
                ),
                'update_cargos_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/CargosUpdate',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'updateCargo',
                        ),
                    ),
                ),
            
            // Rotas de PODERES do Admin
                'poderes_sadmin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/Poderes',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'poder',
                        ),
                    ),
                ),
                'update_poderes_admin' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route'    => '/Admin/PoderesUpdate',
                        'defaults' => array(
                            'controller' => 'Admin\Controller\Admin',
                            'action'     => 'updatePoder',
                        ),
                    ),
                ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'module_layouts' => array(
        'admin' => 'layout/layout-admin.php',
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout-admin.php',
            'admin/index/index' => __DIR__ . '/../view/admin/index/index.php',
            'error/404'               => __DIR__ . '/../view/error/404.php',
            'error/index'             => __DIR__ . '/../view/error/index.php',
        ),
        'template_path_stack' => array(
           'admin' =>  __DIR__ . '/../view',
        ),
        'default_template_suffix' => 'php',
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);