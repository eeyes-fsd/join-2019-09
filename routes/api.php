<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
], function ($api){
    $api->get('version', function (){
        return response('Version 1');
    });

    $api->post('applicants', 'ApplicantsController@store')
        ->name('api.applicants.store');

    $api->get('departments', 'DepartmentsController@index')
        ->name('api.departments.index');
});
