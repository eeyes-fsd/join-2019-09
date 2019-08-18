<?php

namespace App\Http\Controllers\Api;

use App\Applicant;
use App\Http\Requests\ApplicantRequests;

class ApplicantsController extends Controller
{
    /**
     * @param ApplicantRequests $request
     * @return mixed
     */
    public function store(ApplicantRequests $request)
    {
        Applicant::create($request->all());
        return $this->response->created();
    }
}
