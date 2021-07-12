<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JokeController extends Controller
{

    protected $jokes;

    public function __construct(Joke $joke)
    {
        $this->jokes = $joke;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $jokes = $this->jokes->all();

        return view('jokes.index', compact('jokes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('jokes.create', compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $joke = $this->jokes->create($data);

        return redirect()->route('jokes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function show(Joke $joke)
    {
        $joke->created = Carbon::parse($joke->created_at)->format('d/m/Y');
        return response()->json($joke);
    }

    /**
     * like the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request, Joke $joke)
    {
        $joke->update(['like' => $joke->like + 1]);
        return $joke->like;
    }

    /**
     * Deslike the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function deslike(Request $request, Joke $joke)
    {
        $joke->update(['deslike' => $joke->deslike + 1]);
        return $joke->deslike;
    }

}
