<?php
/** ASSOCIATION - is generalized concept of relations
 * (has-a)
 * 
 * Person has relationship with Book
 * link between two classes - Person "has-a" Book
 *  
 */
class PersonAssociation
{
    private Book $book;
    public function __construct(Book $book)
    {
        $this->book = $book;
    }
}
/** COMPOSITION  
 * (has-a + whole-part + ownership)
 * 
 * Person own $book and multimedia for whole life,
 * when person dies book and multimedia is also destroyed
 */
class PersonComposition
{
    private $book;
    private $multimedia = [];
    public function __construct()
    {
        $this->book = new Book;
    }
    public function newBook()
    {
        $books[] = new Book;
    }
}

/** AGGREGATION
 * (has-a + whole-part) single or collection
 * 
 * book, movie and multimedia is borrowed from someone else
 * when person dies, book and movie is not destroyed
 * 
 * Person "has-a" book and movie, and  "whole-part" multimedia
 * 
 */
class PersonAggregation
{
    private $book;
    private $movie;
    private $multimedia = []; //aggregation whole-part collection 
    // aggregate by constructor
    public function __construct($book, Movie $movie) //  you can agregate with/without type of object
    {
        $this->book = $book;
        $this->movie = $movie;
    }
    //aggregate by method
    public function addMultimedia($multimedia) 
    {
        $this->multimedia[] = $multimedia;
    }
}
$book = new Book();
$movie = new Movie();
$person = new PersonAggregation($book, $movie);
$person->addMultimedia(new Book());
$person->addMultimedia(new Movie());


/** DEPENDECY
 * 
 * there is no conceptual link between two objects
 * person does not own book, just read it
 */
class PersonDependency
{
    public function hasRead(Book $book) { 
        return $book->hasRead();
    }
}


