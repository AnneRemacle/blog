<?php
    namespace Model;

    class Posts extends Model {

        protected $table = 'posts';

        public function getPostsByCategoryId( $id ) {
            $sql = 'SELECT posts.*
                    FROM posts
                    JOIN categories ON categories.id = posts.category_id
                    WHERE categories.id = :id';

            $dpoSt = $this -> cn -> prepare( $sql);
            $pdoSt -> execute( [ ':id' => $id ] );
            return $pdoSt -> fetchAll();
        }

        public function getCommentsByPostId( $id ) {
            $sql = 'SELECT comments.*
                    FROM comments
                    JOIN posts ON posts.id = comments.post_id
                    WHERE posts.id = :id';

            $pdoSt = $this -> cn -> prepare( $sql);
            $pdoSt -> execute( [ ':id' => $id ] );
            return $pdoSt -> fetchAll();
        }
    }
