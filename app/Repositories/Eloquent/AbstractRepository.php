<?php

namespace App\Repositories\Eloquent;

use Exception;
use Illuminate\Support\Facades\DB;

abstract class AbstractRepository
{

    /**
     * @var model
     */
    protected $model;

    /**
     * 
     */
    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function getAll($orderBy = null)
    {
        try{
            return $this->model
            ->orderBy($orderBy)
            ->paginate(10);
        } catch (Exception $e) {
            return $this->model
            ->paginate(10);
        } 
    }

    public function save($data)
    {
        try {
            DB::beginTransaction();
            $result = $this->model->create($data)->fresh();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('Erro inesperado ao salvar.');
        }
        return $result;
         
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function update($data, $id)
    {
        try {
            DB::beginTransaction();
            $result = $this->model->where('id', $id)->update($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('Erro inesperado ao atualizar.');
        }
        return $result;
        
    }


    public function destroy($id)
    {
        try {
        DB::beginTransaction();
        $result = $this->model->destroy($id);
        DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('Erro inesperado ao deletar.');
        }
        return $result;
    }


    protected function resolveModel()
    {
        return app($this->model);
    }

}