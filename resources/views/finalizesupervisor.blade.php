<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalized Supervisor List </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;

        }

        h2 {
            color: #13a2AC;
            text-align: center;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: auto;

        }

        th,
        td {
            border: 1px solid #171b19;
            padding: 12px;
            text-align: left;
        }


        th {
            background-color: #13a2ac;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            @include('Dashboard')
        </div>

        <h2>Finalized Supervisor List</h2>

        <table>
            <thead>
                <tr>
                    <th> # </th>
                    <th>Supervisor Name</th>
                    <th>Project Title</th>
                    <th>Student Name </th>
                    <th>Arid No</th>
                    <th>Class</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mr. Muhammad Azhar</td>
                    <td>Central Coordination System</td>
                    <td>Hira Nasir <br> Isma Wajid<br> Shanza Muzaffer</td>
                    <td>20-ARID-767 <br> 20-ARID-771 <br>20-ARID-826</td>
                    <td>BSSE 7(A)</td>


                </tr>
                <tr>
                    <td>2</td>
                    <td>Ms.Aiman Khan Nazir</td>
                    <td>Smart School Shuttle</td>
                    <td>Ramsha Malik <br> Rameen Hahmi<br> Umama Bibi</td>
                    <td>20-ARID-819 <br> 20-ARID-818 <br>20-ARID-834</td>
                    <td>BSSE 7(B)</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Ms.Nergis Gulzar</td>
                    <td>AI-Jabbar Android Application</td>
                    <td>Sara Ibrahim <br> Sajeeha Ahmed</td>
                    <td>20-ARID-823 <br> 20-ARID-821 </td>
                    <td>BSSE 7(B)</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>Dr.Kashif Sattar</td>
                    <td>Intelli Firewall</td>
                    <td>Amna Yaseen <br> Maha Arshad<br> Shoaib Teshrif</td>
                    <td>20-ARID-753 <br> 20-ARID-779 <br>20-ARID-830</td>
                    <td>BSSE 7(A)</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dr.Ruqia Bibi</td>
                    <td>Physio Flex</td>
                    <td>Hamza Akram <br> Syeda Moniza<br> Muhammad Fahad Basir</td>
                    <td>20-ARID-763 <br> 20-ARID-833 <br>20-ARID-790</td>
                    <td>BSSE 7(A)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ms.Bushra Hameed</td>
                    <td>Room Roamer</td>
                    <td>Meerab Mushtaq <br>Mehmoona Noor<br> Sayyam Safdar</td>
                    <td>20-ARID-782 <br> 20-ARID-783 <br>20-ARID-824</td>
                    <td>BSSE 7(A)</td>
                </tr>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
</body>

</html>
