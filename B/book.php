<?php
include 'interface.php';
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publishYear;
    private $isbn;
    private $chapterList;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function setPublishYear($publishYear) {
        $this->publishYear = $publishYear;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }

    public function setChapterList($chapterList) {
        $this->chapterList = $chapterList;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getPublishYear() {
        return $this->publishYear;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getChapterList() {
        return $this->chapterList;
    }
}
?>