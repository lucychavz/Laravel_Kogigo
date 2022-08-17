<?php

namespace App\Http\Controllers;

use App\Models\Homeofficesecurity;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Class HomeofficesecurityController
 * @package App\Http\Controllers
 */
class HomeofficesecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeofficesecurities = Homeofficesecurity::paginate();

        return view('homeofficesecurity.index', compact('homeofficesecurities'))
            ->with('i', (request()->input('page', 1) - 1) * $homeofficesecurities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homeofficesecurity = new Homeofficesecurity();
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('homeofficesecurity.create', compact('homeofficesecurity', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Homeofficesecurity::$rules);

        $homeofficesecurity = Homeofficesecurity::create($request->all());

        return redirect()->route('homeofficesecurities.index')
            ->with('success', 'Homeofficesecurity created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homeofficesecurity = Homeofficesecurity::find($id);

        return view('homeofficesecurity.show', compact('homeofficesecurity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeofficesecurity = Homeofficesecurity::find($id);
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('homeofficesecurity.edit', compact('homeofficesecurity', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Homeofficesecurity $homeofficesecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeofficesecurity $homeofficesecurity)
    {
        request()->validate(Homeofficesecurity::$rules);

        $homeofficesecurity->update($request->all());

        return redirect()->route('homeofficesecurities.index')
            ->with('success', 'Homeofficesecurity updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $homeofficesecurity = Homeofficesecurity::find($id)->delete();

        return redirect()->route('homeofficesecurities.index')
            ->with('success', 'Homeofficesecurity deleted successfully');
    }
}
