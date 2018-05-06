<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $book = new Book;
      $book->isbn = $request->isbn;
      $book->name = $request->name;
      if(\Request::has('published_year')) $book->published_year = $request->published_year;
      if(\Request::has('publisher')) $book->publisher = $request->publisher;
      if(\Request::has('genre')) $book->genre = $request->genre;
      if(\Request::has('author')) $book->author = $request->author;
      if(\Request::has('title')) $book->title = $request->title;
      if(\Request::has('checked_out')) $book->checked_out = $request->checked_out;
      if(\Request::has('condition')) $book->condition = $request->condition;
      $book->save();
      return $book->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
      if(\Request::has('isbn')) $book->isbn = $request->isbn;
      if(\Request::has('name')) $book->name = $request->name;
      if(\Request::has('published_year')) $book->published_year = $request->published_year;
      if(\Request::has('publisher')) $book->publisher = $request->publisher;
      if(\Request::has('genre')) $book->genre = $request->genre;
      if(\Request::has('author')) $book->author = $request->author;
      if(\Request::has('title')) $book->title = $request->title;
      if(\Request::has('checked_out')) $book->checked_out = $request->checked_out;
      if(\Request::has('condition')) $book->condition = $request->condition;
      $book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
      $driver->delete();
    }
}
