<?php
    namespace Controller;

    use Model\Comments;

    class CommentsController {
        private $comments_model = null;

        public function __construct() {
            $this -> comments_model = new Comments();
        }

        public function index() {
            $comments = $this -> comments_model -> all();
            $view = 'indexComments.php';

            return [
                'comments' => $comments,
                'view' => $view,
                'page_title' => 'Blog | Toutes les commentaires'
            ];
        }

        public function show() {
            if( !isset( $_GET[ 'id' ] ) ) {
                die( 'Il manque l’identifiant' );
            }
            $id = intval( $_GET[ 'with' ] );
            $with = explode( ',', $_GET[ 'with' ] );
            if( in_array( 'comments', $with ) ) {
                    $comments_model = new Posts();
                    $comments = $comments_model -> getCommentsByPostId( $category -> id );
            }

            $view = 'showComments.php';
            return [
                'comments' => $comment,
                'view' => $view,
                'page_title' => 'Tous les commentaires de l’article ' . $post->title,
                'comments' => $comments
            ];
            }
        }
