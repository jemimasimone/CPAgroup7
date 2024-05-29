<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Record</title>

    <!--Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!--Bootstrap notes ni nikol-->


<!--"form-control" para sa responsive na input sa form-->
<!--"container pang group sakanila-->
<!--"mb-3" para may space bawat div-->

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

        <form style="width:35%;" action="{{route('student.saveRecord')}}" method="post">
            @csrf
            @method('post')
            <h1>Create Student</h1>
            <div class="mb-3">
                <label class="form-label">First Name:</label>
                <input class="form-control" type="text" name="FN" placeholder="First Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Middle Name:</label>
                <input class="form-control" type="text" name="MN" placeholder="Middle Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name:</label>
                <input class="form-control" type="text" name="LN" placeholder="Last Name">
            </div>
            <div class="col-4 mb-3">
                <label class="form-label">Age:</label>
                <input class="form-control" type="text" name="AGE" placeholder="Age">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="save">
            </div>

        </form>

    </div>


    <!--Boostrap JavaScript Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>