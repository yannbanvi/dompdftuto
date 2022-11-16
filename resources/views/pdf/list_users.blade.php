<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Tahoma, Geneva, sans-serif;
        }
        table td {
            padding: 15px;
        }
        table thead th {
            background-color: #54585d;
            color: #ffffff;
            font-weight: bold;
            font-size: 13px;
            border: 1px solid #54585d;
        }
        table tbody td {
            color: #636363;
            border: 1px solid #dddfe1;
        }
        table tbody tr {
            background-color: #f9fafb;
        }
        table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .page_number:before {
            content: "Page " counter(page);
        }
        .entete{
            width: 100%;
            height: 100px;
            border: 1px solid black;
            margin-bottom: 20px;
        }

        header{
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            /** Extra personal styles **/
            background-color: #eaeaea;
            color: black;
            text-align: center;
            line-height: 1.5cm;
        }

        @page { margin: 100px 25px; }

    </style>
</head>
<body>



<header class="entete">
    <div>
        <img
            src="{{ base_path() .'/public/images/logo.jpg' }}"
            alt="" width="100" height="100">
    </div>
    <p><span class="page_number"></span></p>
</header>

    <table style="margin-top: 50px;">
        <thead>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        </thead>
        <tbody>
        @foreach( $users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


<script type="text/php">

    if (isset($pdf)) {
     //Shows number center-bottom of A4 page with $x,$y values
        $x = 250;  //X-axis i.e. vertical position
        $y = 820; //Y-axis horizontal position
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";  //format of display message
        $font =  $fontMetrics->get_font("helvetica", "bold");
        $size = 10;
        $color = array(255,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }

    </script>
</body>
</html>
