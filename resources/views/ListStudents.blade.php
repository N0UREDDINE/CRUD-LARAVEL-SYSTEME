<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-UOJmHJtZpwzXpPdbN6/7dPo1VTyPwPJj9eC3i1EZv+BC9Mj/Ja+ze8Wanr0XTzeIjDk5w5Q6FZbBUJGv9P9U6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-PJxw0bVYBzDbO+POdCfCZ5rnWhm0Kj+5kXIO5Q5D6UyR12hqyP6nqqcJ2Kk8G3PyyoNPptp9XfjJ54n8WAvYfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        h2 {
            width: 100%;
            height: 100px;
            color: aliceblue;
            background-color: #0d0d0dea;
            text-align: center;
            line-height: 100px;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this student record?");
        }
    </script>
    
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h2 style="">Students List</h2>
                <br>
                <a style="float: right" href="{{ url('AddStudents') }}" class="btn btn-dark mb-3"> ADD STUDENT </a>
                <table class="table table-dark table-hover  table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center" class="p-3" scope="col">ID</th>
                            <th style="text-align: center" class="p-3" scope="col">NAME</th>
                            <th style="text-align: center" class="p-3" scope="col">EMAIL</th>
                            <th style="text-align: center" class="p-3" scope="col">PHONE</th>
                            <th style="text-align: center" class="p-3" scope="col">ADRESSE</th>
                            <th style="text-align: center" class="p-3" style="text-align:center" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($data as $StudentsData)
                            <tr>
                                <th style="text-align: center" class="p-3">{{ $StudentsData->id }}</th>
                                <td style="text-align: center" class="p-3">{{ $StudentsData->name }}</td>
                                <td style="text-align: center" class="p-3">{{ $StudentsData->email }}</td>
                                <td style="text-align: center" class="p-3">{{ $StudentsData->phone }}</td>
                                <td style="text-align: center" class="p-3">{{ $StudentsData->adress }}</td>
                                <td class="p-3" style="text-align:right ">
                                    <a href="{{ url('EditStudents/' . $StudentsData->id) }}" class="btn btn-primary">Edit
                                    </a>
                                    <a href="{{ url('DeleteStudents/' . $StudentsData->id) }}"onclick="return confirmDelete();" class="btn btn-danger">Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
