<?php


namespace App\Entity;

use \App\Db\Database;
use \PDO;

    class Crud {

        public $id;

        public $name;

        public $lastName;

        public $email;

        public function cadastrar(){
            $this->date = date('Y-m-d H:i:s');

            $obDatabase = new Database('users');
            $this->id = $obDatabase->insert([
                'name'      => $this->name,
                'lastName'  => $this->lastName,
                'email'     => $this->email,
                'date'      => $this->date
            ]);

            return true;
        }

        public function atualizar() {
            return (new Database('users'))->update('id = '.$this->id, [
                'name'      => $this->name,
                'lastName'  => $this->lastName,
                'email'     => $this->email,
                'date'      => $this->date
            ]);
        }

        public function excluir() {
            return (new Database('users'))->delete('id= '.$this->id);
        }

        public static function getCruds($where = null, $order = null, $limit = null) {
            return (new Database('users'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        }

        public static function getCrud($id) {
            return (new Database('users'))->select('id = '.$id)->fetchObject(self::class);
        }
    }