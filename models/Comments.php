<?php
    namespace Model;

    class Comments extends Model {

        protected $table = 'comments';

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
