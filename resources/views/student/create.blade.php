<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Student Record</title>
    </head>
    <body bgcolor = gray>
        <h1>Create Student</h1>
        <form action="{{route('student.saveRecord')}}" method="post">
            @csrf
            @method('post')
            <div>
                <label for="">First Name:</label>
                <input type="text" name="FN" placeholder="First Name">
            </div>
            <div>
                <label for="">Middle Name:</label>
                <input type="text" name="MN" placeholder="Middle Name">
            </div>
            <div>
                <label for="">Lasr Name:</label>
                <input type="text" name="LN" placeholder="Last Name">
            </div>
            <div>
                <label for="">Age:</label>
                <input type="text" name="AGE" placeholder="Age">
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </form>
    </body>

</html>