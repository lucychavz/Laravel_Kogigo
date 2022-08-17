<?php

namespace App\Http\Controllers;

use App\Models\Plumbing;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Class PlumbingController
 * @package App\Http\Controllers
 */
class PlumbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plumbings = Plumbing::paginate();

        return view('plumbing.index', compact('plumbings'))
            ->with('i', (request()->input('page', 1) - 1) * $plumbings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plumbing = new Plumbing();
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('plumbing.create', compact('plumbing', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plumbing::$rules);

        $plumbing = Plumbing::create($request->all());

        return redirect()->route('plumbings.index')
            ->with('success', 'Plumbing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plumbing = Plumbing::find($id);

        return view('plumbing.show', compact('plumbing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plumbing = Plumbing::find($id);
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('plumbing.edit', compact('plumbing', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plumbing $plumbing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plumbing $plumbing)
    {
        request()->validate(Plumbing::$rules);

        $plumbing->update($request->all());

        return redirect()->route('plumbings.index')
            ->with('success', 'Plumbing updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plumbing = Plumbing::find($id)->delete();

        return redirect()->route('plumbings.index')
            ->with('success', 'Plumbing deleted successfully');
    }
}
