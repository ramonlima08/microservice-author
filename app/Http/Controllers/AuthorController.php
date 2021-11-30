<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return author List
     * @return Illuminate/Http/Response
     * 
     */
    public function index()
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    /**
     * Create an instace of Author
     * @return Illuminate/Http/Response
     * 
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Return a specific Author
     * @return Illuminate/Http/Response
     * 
     */
    public function show($author)
    {
        
    }

    /**
     * Update a specific Author
     * @return Illuminate/Http/Response
     * 
     */
    public function update(Request $request, $author)
    {
        
    }

    /**
     * Remove a specific Author
     * @return Illuminate/Http/Response
     * 
     */
    public function destroy($author)
    {
        
    }
    
}
