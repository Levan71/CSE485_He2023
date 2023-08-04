<?php

interface IBook {
    public function getBookTitle();
    public function getAuthor();
    public function getPublicationYear();
    public function getPublisher();
    public function getISBN();
    public function getChapterName();
}

class Book implements IBook {
    protected $bookTitle;
    protected $author;
    protected $publicationYear;
    protected $publisher;
    protected $ISBN;
    protected $chapterName;
    
    public function __construct($bookTitle, $author, $publicationYear, $publisher, $ISBN, $chapterName) {
        $this->bookTitle = $bookTitle;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->publisher = $publisher;
        $this->ISBN = $ISBN;
        $this->chapterName = $chapterName;
    }
    
    public function getBookTitle() {
        return $this->bookTitle;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getPublicationYear() {
        return $this->publicationYear;
    }
    
    public function getPublisher() {
        return $this->publisher;
    }
    
    public function getISBN() {
        return $this->ISBN;
    }
    
    public function getChapterName() {
        return $this->chapterName;
    }
}

class BookList {
    protected $books;
    
    public function __construct() {
        $this->books = array();
    }
    
    public function addBook(Book $book) {
        $this->books[] = $book;
    }
    
    public function removeBook(Book $book) {
        $index = array_search($book, $this->books);
        if ($index !== false) {
            array_splice($this->books, $index, 1);
        }
    }
    
    public function getAllBooks() {
        return $this->books;
    }
}

// Sử dụng interface "IBook" và lớp "BookList"

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925, "Scribner", "9780743273565", "Chapter 1");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960, "J. B. Lippincott & Co.", "9780062420701", "Chapter 1");

$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);

$books = $bookList->getAllBooks();
foreach ($books as $book) {
    echo "Book: " . $book->getBookTitle() . "\n";
    echo "Author: " . $book->getAuthor() . "\n";
    echo "Publication Year: " . $book->getPublicationYear() . "\n";
    echo "Publisher: " . $book->getPublisher() . "\n";
    echo "ISBN: " . $book->getISBN() . "\n";
    echo "Chapter Name: " . $book->getChapterName() . "\n";
    echo "\n";
}

?>