<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 20/11/2018
     * Time: 14:16
     */


    namespace AppBundle\Controller;
    //autoloader
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;


    class PagesController extends Controller
    {
        private $articles =
                [
                    'posts' =>
                        [

                        'id' => '01',
                        'titre' => 'Lorem 1',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                 Obcaecati provident quam suscipit tempore velit. <br>
                                                 Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '02',
                        'titre' => 'Lorem 2',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                     Obcaecati provident quam suscipit tempore velit. <br>
                                                     Assumenda consequuntur expedita magnam officia recusandae
                                                      reiciendis repudiandae,
                                                      sed sit!<br>
                                                     Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '03',
                        'titre' => 'Lorem 3',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                     Obcaecati provident quam suscipit tempore velit. <br>
                                                     Assumenda consequuntur expedita magnam officia recusandae reiciendis repudiandae,
                                                      sed sit!<br>
                                                     Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '04',
                        'titre' => 'Lorem 4',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                     Obcaecati provident quam suscipit tempore velit. <br>
                                                     Assumenda consequuntur expedita magnam officia recusandae reiciendis repudiandae,
                                                      sed sit!<br>
                                                     Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '05',
                        'titre' => 'Lorem 5',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                     Obcaecati provident quam suscipit tempore velit. <br>
                                                     Assumenda consequuntur expedita magnam officia recusandae reiciendis repudiandae,
                                                      sed sit!<br>
                                                     Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '06',
                        'titre' => 'Lorem 6',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                     Obcaecati provident quam suscipit tempore velit. <br>
                                                     Assumenda consequuntur expedita magnam officia recusandae reiciendis repudiandae,
                                                      sed sit!<br>
                                                     Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ]
                ];


        /**
         * @Route("/", name="home")
         */
        public function HomeAction()
        {


            return $this->render(
                "@App/Default/home.html.twig",
            [
                'articles'=> $this->articles
            ]

            );
        }


        /**
         * @Route("/articles", name="articles")
         */
        public function ArticlesAction()
        {

            return $this->render(
                "@App/Default/articles.html.twig",
                [
                    'articles'=> $this->articles
                ]


                );

        }

        /**
         * @Route("/contact", name="contact")
         */
        public function CAction()
        {
            return $this->render(
                "@App/Default/contact.html.twig"
            );

        }


    }