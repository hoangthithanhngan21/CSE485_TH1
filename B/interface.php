<?php
interface IBook {
    public function setTitle($title);
    public function setAuthor($author);
    public function setPublisher($publisher);
    public function setPublishYear($publishYear);
    public function setISBN($isbn);
    public function setChapterList($chapterList);

    public function getTitle();
    public function getAuthor();
    public function getPublisher();
    public function getPublishYear();
    public function getISBN();
    public function getChapterList();
}
?>