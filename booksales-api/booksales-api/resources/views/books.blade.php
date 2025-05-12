<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            table-layout: fixed;
        }

        th, td {
            padding: 14px;
            border: 1px solid #c8e6c9;
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }

        th {
            background-color: #388e3c;
            color: white;
            text-transform: uppercase;
        }

        th:nth-child(1), td:nth-child(1) { width: 10%; } 
        th:nth-child(2), td:nth-child(2) { width: 25%; } 
        th:nth-child(3), td:nth-child(3) { width: 10%; } 
        th:nth-child(4), td:nth-child(4) { width: 10%; } 
        th:nth-child(5), td:nth-child(5) { width: 25%; } 

        tr:nth-child(even) {
            background-color: #f1f8e9;
        }

        tr:hover {
            background-color: #dcedc8;
        }

        img {
            width: 100px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #a5d6a7;
            border-radius: 6px;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            tr {
                margin-bottom: 15px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                border-radius: 5px;
                padding: 10px;
                background: #ffffff;
            }

            th {
                display: none;
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                padding-left: 10px;
                font-weight: bold;
                text-align: left;
                color: #388e3c;
            }

            img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Cover</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td data-label="Judul">{{ $book['title'] }}</td>
                        <td data-label="Deskripsi">{{ $book['description'] }}</td>
                        <td data-label="Harga">Rp{{ number_format($book['price'], 0, ',', '.') }}</td>
                        <td data-label="Stok">{{ $book['stock'] }}</td>
                        <td data-label="Cover">
                            <img src="{{ asset('images/books/' . $book['cover_photo']) }}" alt="{{ $book['title'] }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
