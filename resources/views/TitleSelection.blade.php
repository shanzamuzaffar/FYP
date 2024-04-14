<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page with Background Image Example</title>
    <link rel="stylesheet" href="{{ asset('assets/css/stylets.css') }}">

</head>

<body>

    <div id="bg"></div>

    <div class="sidebar">
        @include('Dashboard')
    </div>

    <form method="POST" action="{{ route('selection.store') }}">
        @csrf
        <div>
            <h1> Title Selection </h1>
        </div>

        <div class="form-field">
            <input type="text" name="title" placeholder="Title Name" required />
        </div>
        <div class="form-field">
            <input type="text" name="class_name" placeholder="Class Name" required />
        </div>

        <div class="form-field">
            <input type="text" name="group_member_1" placeholder="Group member 1 & Arid No " required />
        </div>
        <div class="form-field">
            <input type="text" name="group_member_2" placeholder="Group member 2 & Arid No" required />
        </div>
        <div class="form-field">
            <input type="text" name="group_member_3" placeholder="Group member 3 & Arid No" required />
        </div>
        <div class="form-field">
            <select name="supervisor" required>
                <option value="" disabled selected hidden>Select Supervisor</option>
                <option value="M Azhar">M Azhar</option>
                <option value="Ahsan Arshad">Ahsan Arshad</option>
                <option value="Bushra Hamid">Bushra Hamid</option>
            </select>
        </div>

        <div class="form-field">
            <button class="btn" type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
