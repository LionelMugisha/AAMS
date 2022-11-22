<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report</title>
    </head>
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    </style>
    <body>
        <h1>List of all Members</h1>
        <table id="customers">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Employment</th>
                <th>Status</th>
            </tr>
            @foreach($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->telephone }}</td>
                    <td>{{ $member->employment }}</td>
                    <td>{{ $member->status }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>