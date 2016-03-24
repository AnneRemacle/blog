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
            $id = intval( $_GET[ 'id' ] );
            $comment = $this -> comments_model -> find( $id );
            $comments = null;
            $post = null;

            if( isset( $_GET[ 'with' ] ) ) {
                $with = explode( ',', $_GET[ 'with' ] );
                if( in_array( 'comments', $with ) ) {
                    $comments_model = new Comments();
                    $comments = $comments_model -> getCommentsByPostId( $category -> id );
            }
            }

            $view = 'showComments.php';
            return [
                'comments' => $comment,
                'post' => $post,
                'view' => $view,
                'page_title' => 'Tous les commentaires de l’article ' . $post-> title,
                'comments' => $comments
            ];

        }
    }
