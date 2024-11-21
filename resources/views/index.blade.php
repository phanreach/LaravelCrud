<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>All Students</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Name</th>
                <th>Study Program</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->study_program }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
