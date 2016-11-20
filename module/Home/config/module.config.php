<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonHome for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Home;

return array(
    'router' => array(
        'routes' => array(
            
            // ----------------------------------------------------------------
            // Rotas da aplicação do site
            // ----------------------------------------------------------------
        
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'home2' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Home',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'eleicao' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Eleicoes',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'eleicao',
                    ),
                ),
            ),
            'votos' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Votos',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'voto',
                    ),
                ),
            ),
            'cargos' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Cargos',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'cargo',
                    ),
                ),
            ),
            'poderes' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Poderes',
                    'defaults' => array(
                        'controller' => 'Home\Controller\Index',
                        'action'     => 'poder',
                    ),
                ),
            ),
            
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /home/:controller/:action
            'Home' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/home',
                    'defaults' => array(
                        '__NAMESPACE__' => 'home\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
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
    'controllers' => array(
        'invokables' => array(
            
            // Controllers da aplicação
            'Home\Controller\Index' => Controller\IndexController::class,
        ),
    ),
    'module_layouts' => array(
        'Home' => 'layout/layout-home.php',
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout-home.php',
            'home/index/index' => __DIR__ . '/../view/home/index/index.php',
            'error/404'               => __DIR__ . '/../view/error/404.php',
            'error/index'             => __DIR__ . '/../view/error/index.php',
        ),
        'template_path_stack' => array(
            'home' => __DIR__ . '/../view',
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