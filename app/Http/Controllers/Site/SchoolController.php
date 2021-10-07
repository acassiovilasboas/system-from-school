<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchoolRequest;
use App\Services\SchoolService;
use Exception;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    protected $schoolService;

    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.school.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.school.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request)
    {
        
        $result = ['status' => 200];

        try {
            $result['data'] = $this->schoolService->save($request);
        } catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return redirect()->route('site.school.index')->with([
            'success' => true,
            'message' => 'Escola incluída com sucesso!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('site.school.show', ['slug' => $slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('site.school.edit', ['slug' => $slug]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ddd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
