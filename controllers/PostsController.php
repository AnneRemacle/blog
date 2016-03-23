<?php
    namespace Controller;

    use Model\Posts;
    use Model\Comments;

    class PostsController {
        private $posts_model = null;

        public function __construct() {
            $this -> posts_model = new Posts();
        }

        public function index() {
            $posts = $this -> posts_model -> all();
            $view = 'indexPosts.php';

            return [
                'posts' => $posts,
                'view' => $view,
                'page_title' => 'Blog | Tous les articles'
            ];
        }

        public function show() {
            if( !isset( $_GET[ 'id' ] ) ) {
                die( 'Il manque l’identifiant' );
            }
            $id = intval($_GET['id']);
            $post = $this -> posts_model->find($id);
            $comments = null;

            if( isset( $_GET[ 'with' ] ) ) {
                $with = explode( ',', $_GET[ 'with' ] );
                if( in_array( 'comments', $with ) ) {
                    $comments_model = new Posts();
                    $comments = $comments_model -> getCommentsByPostId( $post -> id );
                }
            }

            $view = 'showPosts.php';
            return [
                'comments' => $comments,
                'view' => $view,
                'page_title' => 'Page de l’article ' . $post->title
            ];
        }
    }
