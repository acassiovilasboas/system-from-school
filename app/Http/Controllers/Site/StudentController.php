<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Services\StudentService;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    /**
     * metodos da rota web
     * index, get, ertorna view e faz busca
     * show, get, retorna view com dados de um estudante
     * create, get, retorna view com formulario
     * delete, post, executa a exlusao e retorna uma view
     * store, post, armazena os dados e retorna uma view para o index
     */

     protected $studentService;

     public function __construct(StudentService $studentService)
     {
         $this->studentService = $studentService;
     }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->studentService->getAll();
        try{
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return view('site.student.index', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $result = $this->studentService->getSchools();
        } catch (Exception $e) {
            $result = $e->getMessage();
        }

        return view('site.student.new', ['result' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            $result = $this->studentService->save($request);
        } catch (Exception $e) {
            return redirect()->route('site.student.index')->with([
                'success' => true,
                'message' => 'Oooops! Ocorreu um erro inesperado!'
            ]);
        }
        return redirect()->route('site.student.index')->with([
            'success' => true,
            'message' => 'Aluno incluído com sucesso!'
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
            $result = $this->studentService->getById($id);
        } catch (Exception $e) {
            return redirect()->route('site.student.index')->with([
                'success' => true,
                'message' => 'Ooops! Ocorreu um erro inesperado!'
            ]);
        }
        return view('site.student.show', ['result' => $result]);
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
            $result = $this->studentService->getById($id);
        } catch (Exception $e) {
            return redirect()->route('site.student.index')->with([
                'success' => true,
                'message' => 'Ooops! Ocorreu um erro inesperado!'
            ]);
        }
        return view('site.student.edit', ['result' => $result]);    }

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
