<?php

namespace App\Services;

use App\Http\Requests\StoreSchoolRequest;
use App\Interfaces\SchoolRepositoryInterface;
use PharIo\Manifest\InvalidUrlException;

class SchoolService
{
    /**
     * @var schoolRepositoryInterface
     */
    protected $schoolRepositoryInterface;

    /**
     * @param SchoolRepositoryInterface $schoolRepositoryInterface
     */
    public function __construct(SchoolRepositoryInterface $schoolRepositoryInterface)
    {
        $this->schoolRepositoryInterface = $schoolRepositoryInterface;
    }

    public function getAll()
    {
        $orderBy = "name";
        return $this->schoolRepositoryInterface->getAll($orderBy);
    }

    public function getClasses($id)
    {
       return $this->schoolRepositoryInterface->getClasses($id);
    }

    public function save(StoreSchoolRequest $request) 
    {
        $data = $request->only([
            'name',
            'address',
            'district',
            'city',
            'state'
        ]);
        $result = $this->schoolRepositoryInterface->save($data);
        return $result;
    }


    public function getById($id)
    {
        $data =  $this->schoolRepositoryInterface->getById($id);
        if(empty($data))
            throw new InvalidUrlException("Registro inexistente.");
        return $data;
    }

    
    public function update(StoreSchoolRequest $request, $id)
    {
        $data = $request->only([
            'name',
            'address',
            'district',
            'city',
            'state'
        ]);

        $result = $this->schoolRepositoryInterface->update($data, $id);

        return $result;
    }

    public function destroy($id)
    {
        return $this->schoolRepositoryInterface->destroy($id);
    }
}