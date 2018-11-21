<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 20/11/2018
     * Time: 14:16
     */

//  namespace:  appel de la classe Controller
    namespace AppBundle\Controller;
//  autoloader
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;

//  création de la classe héritant de Controller
    class PagesController extends Controller

    {
//      Déclarer parametre de la classe

    //  parametre $articles (array in array
        private $articles =
                [

                        [

                        'id' => '1',
                        'titre' => 'Lorem 1',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '2',
                        'titre' => 'Lorem 2',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '3',
                        'titre' => 'Lorem 3',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'

                        ],
                        [

                        'id' => '4',
                        'titre' => 'Lorem 4',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '5',
                        'titre' => 'Lorem 5',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                        [

                        'id' => '6',
                        'titre' => 'Lorem 6',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                      Assumenda consequuntur expedita magnam officia recusandae
                                                  reiciendis repudiandae,
                                                  sed sit!<br>
                                                 Accusantium dignissimos nobis rerum sequi. Molestias.'
                        ],
                ];

//      Routeur page accueil
        /**
         * @Route("/", name="home")
         */
//      Méthode pour afficher la vue accueil
        public function HomeAction()
        {

//          retourne le contenu du fichier 'home.html.twig' un array avec l'index "articles" qui contient lui-même la variable $article
            return $this->render(
                "@App/Default/home.html.twig",
            [
                'articles'=> $this->articles
            ]

            );
        }

//      Méthode pour afficher la vue articles
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
//      Méthode pour afficher la vue contact
        /**
         * @Route("/contact", name="contact")
         */
        public function ContactAction()
        {
            return $this->render(
                "@App/Default/contact.html.twig"
            );
//      Méthode pour afficher la vue de chaque article
        }
        /**
         * @Route("/article/{id}", name="article")
         */

        public function ArticleAction($id)
        {
            $id = $id-1;
            return $this->render(
                "@App/Default/article.html.twig",
                [
                    'article'=> $this->articles[$id]
                ]
            );

        }

    }
