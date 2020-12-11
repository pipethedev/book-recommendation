<?php


namespace App\GraphQL\Queries;
use App\Models\Book;

class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Book::where('author', 'like', '%'.$args['search'].'%')->get();
    }
}
