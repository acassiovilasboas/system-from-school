<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchoolRequest;
use App\Models\School;
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
        try {
            $result = $this->schoolService->getAll();
        } catch(Exception $e) {
            $result = $e->getMessage();
        }
        // $result = (new School())->all();
        return view('site.school.index', ['result' => $result]);
    }

    public function getClasses($id)
    {
        try {
            $result = $this->schoolService->getClasses($id);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json($result);
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
        try {
            $result = $this->schoolService->save($request);
        } catch(Exception $e) {
            return redirect()->route('site.school.index')->with([
                'success' => true,
                'message' => 'Ooops! Ocorreu um erro inesperado!'
            ]);
        }
        
        return redirect()->route('site.school.index')->with([
            'success' => true,
            'message' => 'Escola incluída com sucesso!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $result = $this->schoolService->getById($id);
        } catch(Exception $e) {
            return redirect()->route('site.school.index')->with([
                'success' => true,
                'message' => 'Ooops! ' . $e->getMessage()
            ]);
        }
        return view('site.school.show', ['result' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $result = $this->schoolService->getById($id);
        } catch(Exception $e) {
            return redirect()->route('site.school.index')->with([
                'success' => true,
                'message' => 'Ooops! Ocorreu um erro inesperado!'
            ]);
        }
        return view('site.school.edit', ['result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSchoolRequest $request, $id)
    {
        try {
            $result = $this->schoolService->update($request, $id);
        } catch (Exception $e) {
            return redirect()->route('site.school.index')->with([
                'success' => true,
                'message' => 'Ooops! Ocorreu um erro inesperado!'
            ]);
        }
        return redirect()->route('site.school.index')->with([
            'success' => true,
            'message' => 'Escola atualizada com sucesso!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->schoolService->destroy($id);
        } catch(Exception $e) {
            return redirect()->route('site.school.index')->with([
                'success' => true,
                'message' => 'Não foi possível excluir.'
            ]);
        }
        return redirect()->route('site.school.index')->with([
            'success' => true,
            'message' => 'Escola excluída com sucesso!'
        ]);
    }
}
