<?php

namespace App\Http\Controllers\Api;

use App\Department;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $data = [];
        foreach ($departments as $department) {
            $data[] = [
              'id' => $department->id,
              'name' => $department->name,
            ];
        }

        return $this->response->array($data);
    }
}
