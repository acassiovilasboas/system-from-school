<?php

namespace App\Services;

use App\Http\Requests\StoreSchoolRequest;
use App\Repositories\SchoolRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class SchoolService
{
    /**
     * @var SchoolRespository
     */
    protected $schoolRepository;

    /**
     * @param SchoolRepository $schoolRepository
     */
    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    public function getAll()
    {
        return $this->schoolRepository->getAll();
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

        $result = $this->schoolRepository->save($data);

        return $result;
    }

    public function getById($id)
    {
        return $this->schoolRepository->getById($id);
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

        $result = $this->schoolRepository->update($data, $id);

        return $result;
    }

    public function destroy($id)
    {
        return $this->schoolRepository->destroy($id);
    }
}