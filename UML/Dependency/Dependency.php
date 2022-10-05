<?php
/**
 * DEPENDENCY relation
 * 
 * source: http://www.cs.utsa.edu/~cs3443/uml/uml.html
 */
class Person 
{
    public function hasRead(Book $book) { //Dependency - Person references Book (as a method parameter or return type)
        return $book->hasRead();
    }
}

class Book
{
    public function hasRead() {
        return true;
    }
}