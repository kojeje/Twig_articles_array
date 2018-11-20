<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 20/11/2018
     * Time: 14:16
     */
// identifiant de classes (namespace
    namespace AppBundle\Controller;
    //autoloader
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Request;

    class PagesController extends Controller
    {
        /**
         * @Route("/", name="home")
         */
        public function HomeAction()
        {

            return $this->render(
                "@App/Default/home.html.twig",
                [
                    'posts' => [
                        [   'id'=>1,
                            'titre' => 'Bla1',
                            'contenu' =>'Lorem1 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                            'resume' => 'Lorem1 ipsum dolor sit amet,'
                        ],
                        [   'id'=>2,
                            'titre' => 'Bla2',
                            'contenu' =>'Lorem2 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                            'resume' => 'Lorem2 ipsum dolor sit amet,'
                        ],
                        [   'id'=>3,
                            'titre' => 'Bla3',
                            'contenu' =>'Lorem3 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                            'resume' => 'Lorem3 ipsum dolor sit amet,'
                        ]
                    ]

                ]
            );
        }
    }