<?php

namespace App\Http\Controllers;

use App\Models\Paint;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Class PaintController
 * @package App\Http\Controllers
 */
class PaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paints = Paint::paginate();

        return view('paint.index', compact('paints'))
            ->with('i', (request()->input('page', 1) - 1) * $paints->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paint = new Paint();
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('paint.create', compact('paint', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paint::$rules);

        $paint = Paint::create($request->all());

        return redirect()->route('paints.index')
            ->with('success', 'Paint created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paint = Paint::find($id);

        return view('paint.show', compact('paint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paint = Paint::find($id);
        $categories = Category::pluck('typesOfProducts', 'id');
        return view('paint.edit', compact('paint', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paint $paint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paint $paint)
    {
        request()->validate(Paint::$rules);

        $paint->update($request->all());

        return redirect()->route('paints.index')
            ->with('success', 'Paint updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paint = Paint::find($id)->delete();

        return redirect()->route('paints.index')
            ->with('success', 'Paint deleted successfully');
    }
}
