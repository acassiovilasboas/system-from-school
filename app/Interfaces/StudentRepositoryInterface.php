<?php
namespace App\Interfaces;

interface StudentRepositoryInterface
{
    public function getAll();
    public function save($data);
    public function getById($id);
    public function update($data, $id);
    public function destroy($id);
}