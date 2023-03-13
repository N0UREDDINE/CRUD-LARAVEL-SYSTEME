<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-UOJmHJtZpwzXpPdbN6/7dPo1VTyPwPJj9eC3i1EZv+BC9Mj/Ja+ze8Wanr0XTzeIjDk5w5Q6FZbBUJGv9P9U6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-PJxw0bVYBzDbO+POdCfCZ5rnWhm0Kj+5kXIO5Q5D6UyR12hqyP6nqqcJ2Kk8G3PyyoNPptp9XfjJ54n8WAvYfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-5">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <form method="POST" action="{{ url('UpdateStudents') }}">
            @csrf
            <fieldset>
                <legend>Edit STUDENT</legend>
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"name="email" value="{{$data->email}}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{$data->phone}}">
                    @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adress" name="adress" value="{{$data->adress}}">
                    @error('adress')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('ListStudents') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
</body>

</html>
