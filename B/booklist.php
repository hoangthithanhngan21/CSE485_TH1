<?php
class BookList {
    private $bookList;

    public function __construct() {
        $this->bookList = array();
    }

    public function addBook($book) {
        array_unshift($this->bookList, $book);
        $this->sortBookList('time'); 
    }

    public function getBookList() {
        return $this->bookList;
    }

    public function sortBookList($sortType)
    {
        switch ($sortType) {
            case "author":
                usort($this->bookList, function($book1, $book2) {
                    return strcmp($book1->getAuthor(), $book2->getAuthor());
                });
                break;
            case "title":
                usort($this->bookList, function($book1, $book2) {
                    return strcmp($book1->getTitle(), $book2->getTitle());
                });
                break;
            case "year":
                usort($this->bookList, function($book1, $book2) {
                    return $book1->getPublishYear() - $book2->getPublishYear();
                });
                break;
            case "time":
                $this->bookList = array_reverse($this->bookList);
                break;
            default:
                // do nothing
                break;
        }
    }
}
?>