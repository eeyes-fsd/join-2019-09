<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>招新数据统计</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="card">
                <h5 class="card-header">
                    报名人员统计
                </h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">姓名</th>
                            <th scope="col">书院</th>
                            <th scope="col">班级</th>
                            <th scope="col">性别</th>
                            <th scope="col">生日</th>
                            <th scope="col">申请部门</th>
                            <th scope="col">联系电话</th>
                            <th scope="col">QQ</th>
                            <th scope="col">留言</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applicants as $applicant)
                            <tr>
                                <th scope="row">{{ $applicant->id }}</th>
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->college }}</td>
                                <td>{{ $applicant->class }}</td>
                                <td>{{ $applicant->gender }}</td>
                                <td>{{ $applicant->birthday }}</td>
                                <td>{{ $applicant->department->name }}</td>
                                <td>{{ $applicant->cellphone }}</td>
                                <td>{{ $applicant->qq }}</td>
                                <td>{!! $applicant->wanna_say !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="card">
                <h5 class="card-header">
                    部门报名人数统计
                </h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">名称</th>
                            <th scope="col">申请人数</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->applicants_count }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
