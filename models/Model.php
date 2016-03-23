<?php
        namespace Model;

        class Model {
            protected $table = '';
            protected $cn = null;

            public function __construct() {
                $dbConfig = parse_ini_file( 'db.ini' );
                $PDOOptions = [
                    \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_OBJ,
                    \PDO:: ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ];

            try {
                $dsn = sprintf( '%s:host=%s; dbname=%s', $dbConfig[ 'driver' ],   $dbConfig[ 'host' ], $dbConfig[ 'dbname' ] );

                $this -> cn = new \PDO( $dsn, $dbConfig[ 'username' ], $dbConfig[ 'password' ], $PDOOptions );

                $this -> cn -> exec( 'SET CHARACTER SET UTF8' );
                $this -> cn -> exec( 'SET NAMES UTF8' );
            } catch( \PDOException $e ) {
                die( $e -> getMessage() );
                }
            }

            public function all() {
                $sql = sprintf( 'SELECT * FROM ' . $this -> table );
                $pdoSt = $this -> cn -> query( $sql );
                return $pdoSt -> fetchAll();
            }

            public function find( $id ) {
                $sql = sprintf( 'SELECT * FROM ' . $this -> table . ' WHERE id= :id' );
                $stmnt = $this -> cn -> prepare( $sql );
                $stmnt -> execute( [ ':id' => $id ] );
                return $stmnt -> fetch();
            }
        }
