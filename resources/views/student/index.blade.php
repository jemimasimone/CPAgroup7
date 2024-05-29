<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Student in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

        <form style="width:35%;">
            <h1>Student Info</h1>
            @if (!empty($student))
                <div class="mb-3">
                    <label class="form-label">First Name:</label>
                    <input class="form-control" type="text" name="FN" value="{{ $student['FN'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Middle Name:</label>
                    <input class="form-control" type="text" name="MN" value="{{ $student['MN'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name:</label>
                    <input class="form-control" type="text" name="LN" value="{{ $student['LN'] }}" readonly>
                </div>
                <div class="col-4 mb-3">
                    <label class="form-label">Age:</label>
                    <input class="form-control" type="text" name="AGE" value="{{ $student['AGE'] }}" readonly>
                </div>

            @else
                <div>No student information found.</div>
            @endif

        </form>

    </div>


    <!--Boostrap JavaScript Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
