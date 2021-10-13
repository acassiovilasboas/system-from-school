<?php

namespace App\Interfaces;

interface SchoolRepositoryInterface
{
    public function getAll();
    public function getForSelect();
    public function getClasses($id);
    public function save($data);
    public function getById($id);
    public function update($data, $id);
    public function destroy($id);
}