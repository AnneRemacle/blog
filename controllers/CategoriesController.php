<?php
    namespace Controller;

    use Model\Categories;
    use Model\Posts;

    class CategoriesController {
        private $categories_model = null;

        public function __construct() {
            $this -> categories_model = new Categories();
        }

        public function index() {
            $categories = $this -> categories_model -> all();
            $view = 'indexCategories.php';

            return [
                'categories' => $categories,
                'view' => $view,
                'page_title' => 'Blog | Toutes les catégories'
            ];
        }

        public function show() {
            if( !isset( $_GET[ 'id' ] ) ) {
                die( 'Il manque l’identifiant de la catégorie' );
            }
            $id = intval( $_GET[ 'with' ] );
            $with = explode( ',', $_GET[ 'with' ] );
                if( in_array( 'categories', $with ) ) {
                    $posts_model = new Posts();
                    $posts = $posts_model -> getPostsByCategoryId( $category -> id );
                }
            }

            $view = 'showCategories.php';
            return [
                'categories' => $category,
                'view' => $view,
                'page_title' => 'Tous les articles de la catégorie ' . $category->name,
                'comments' => $comments
            ];
        }
    }
