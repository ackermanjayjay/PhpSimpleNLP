<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;

class NLPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $samples = [
            'Lorem ipsum dolor sit amet dolor',
            'Mauris placerat ipsum dolor',
            'Mauris diam eros fringilla diam',
        ];

        $vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());

        $vectorizer->fit($samples);

        $vectorizer->transform($samples);
        
        dd($vectorizer);

        return view("Pages/index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
