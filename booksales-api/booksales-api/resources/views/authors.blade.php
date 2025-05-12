<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #c8e6c9;
        }

        th {
            background-color: #2e7d32;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e8f5e9;
        }

        tr:hover {
            background-color: #c8e6c9;
        }

        img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border: 2px solid #a5d6a7;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: right;
                border: 1px solid #c8e6c9;
            }

            td::before {
                position: absolute;
                left: 15px;
                top: 15px;
                content: attr(data-label);
                font-weight: bold;
                text-align: left;
                color: #2e7d32;
            }
        }
    </style>
</head>
<body>

    <h1>List of Authors</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td data-label="ID">{{ $author['id'] }}</td>
                    <td data-label="Name">{{ $author['name'] }}</td>
                    <td data-label="Photo">
                        <img src="{{ asset('images/autors/' . $author['photo']) }}" alt="{{ $author['name'] }}">
                    </td>
                    <td data-label="Bio">{{ $author['bio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
