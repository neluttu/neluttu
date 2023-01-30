<?
$Page = getTemplate('FrontPage');

$Projects = array(
                'aalr' => array(
                            'title' => 'Asociația Artiștilor Lutieri din România',
                            'description' => 'Design concept for a violin makers association, front-end and back-end. Members database with CMS for easy updates.',
                            'image' => 'aalr.ro.jpg',
                            'url' => 'https://www.aalr.ro/',
                            'stack' => array(
                                            'html',
                                            'css',
                                            'php',
                                            'javascript',
                                            'jquery',
                                            'mysql'
                                        )
                                    ),
                'aboutfood' => array(
                            'title' => 'aboutfood - online restaurants menus',
                            'description' => 'Personal project, mean to centralize all food menus in small cities. Complete user system with CMS for business registration.',
                            'image' => 'aboutfood.ro.jpg',
                            'url' => 'https://www.aboutfood.ro/',
                            'stack' => array(
                                            'html',
                                            'css',
                                            'php',
                                            'javascript',
                                            'jquery',
                                            'mysql'
                                            )
                                        ),
                'bibliotecareghin' => array(
                            'title' => 'Petru Maior - Public City Library',
                            'description' => 'Concept and design for the city library, backed by a PHP driven CMS to edit dynamic pages. No frameworks involved.',
                            'image' => 'BibliotecaReghin.ro.jpg',
                            'url' => 'http://www.bibliotecareghin.ro/',
                            'stack' => array(
                                            'html',
                                            'css',
                                            'php',
                                            'javascript',
                                            'jquery',
                                            'mysql'
                                        )
                                    ),
                'blumprod' => array(
                            'title' => 'Blum Prod - thermoforming plastics',
                            'description' => 'Concept and design for a thermoforming company. Presentation page, multilanguage suport and full SEO service.',
                            'image' => 'Blumprod.ro.jpg',
                            'url' => 'http://www.blumprod.ro/',
                            'stack' => array(
                                            'html',
                                            'css',
                                            'php',
                                            'javascript',
                                            'jquery'
                                        )
                                    ),
                );
print $Page;
?>