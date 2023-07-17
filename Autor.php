<?php
    // Class auteur
    class Autor {
        private string $_firstName;
        private string $_lastName;
        private array  $_books;
    
    // constructeur
    public function __construct(string $firstName, string $lastName,){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_books = array();
    }
    // getters
    public function getFirstName(){
        return $this->_firstName;
    }
    public function getLastName(){
        return $this->_lastName;
    }
    public function getBook(){
        return $this->_books;
    }
    //setters
    public function setFirstName($firstName){
        $this->_firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->_lastName = $lastName;
    }
    // fonction d'ajout de livre
    public function addBook($book){
        $this->_books[] = $book;
    }

    public function autorBibliography(){
        echo '<strong><br> Livres de  '. $this->_firstName . ' ' . $this->_lastName.'<br><br></strong>';
        foreach( $this->_books as $book){
            echo '- '. $book->getTitle().' ('.$book->getPublicationYear().') : '.$book->getNbPages().' pages / '.$book->getPrice().' € <br>';
        }
    }
    
    public function __toString(){
        return '- Prénom : '.$this->_firstName.'<br>- Nom : '.$this->_lastName.'<br>';
    }
}
?>