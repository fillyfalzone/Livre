<?php
    // Class livre 
    class Book {
        private string $_title;
        private string $_nbPages;
        private string $_publicationYear;
        private float $_price;
        private Autor $_autor;

        // fct° constructeur
        public function __construct(string $title, string $nbPages, string $publicationYear, float $price, Autor $autor){
            $this->_title = $title;
            $this->_nbPages = $nbPages;
            $this->_publicationYear = $publicationYear;
            $this->_price = $price;
            $this->_autor = $autor;
            $autor->addBook($this); // 
        }

        // getters
        public function getTitle() {
            return $this->_title;
        }
        public function getNbPages() {
            return $this->_nbPages;
        }
        public function getPublicationYear() {
            return $this->_publicationYear;
        }
        public function getPrice() {
            return $this->_price;
        }
        public function getAutor(){
            return $this->_autor;
        }
        // setters

        public function setTitle($title){
            $this->_title = $title;
        }
        public function setNbPages($nbPages){
            $this->_nbPages = $nbPages;
        }
        public function setpublicationYear($publicationYear){
            $this->_publicationYear = $publicationYear;
        }
        public function setPrice($price){
            $this->_price = $price;
        }

        // Les méthodes 
        public function __tostring(){
            return '- Titre : <em>'.$this->_title.'</em> <br>- Publié le : '.$this->_publicationYear.'<br>- Le prix du livre : '.$this->_price.'€ <br>- Nombre de pages : '.$this->_nbPages ."<br>";
        }
    }
?>