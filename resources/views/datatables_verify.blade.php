<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('product')->get();
        return $users;

//        return view('datatables_verify', ['users' => $users]);
    }
}

$list = new UserController();
$array = ($list->index());
$aaa = json_encode($array);
//print_r($aaa);

?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel datatables verify</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    let json = <?php print $aaa; ?>;
    // let json = [{
    //         "id": 1,
    //         "jancode": "1234567890123",
    //         "name": "ケーキ",
    //         "price": 100,
    //     },{
    //         "id": 29,
    //         "jancode": "1234567890124",
    //         "name": "apple",
    //         "price": 200,
    //     }];
    console.log(json);

    $(document).ready(function () {
        $('#table_id').DataTable({
                "data": json,
                "columns": [
                    {"data": "id"},
                    {"data": "jancode"},
                    {"data": "name"},
                    {"data": "price"},
                ],
            }
        );
    });
</script>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>id</th>
        <th>jancode</th>
        <th>name</th>
        <th>price</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
    </div>
</div>
</body>
</html>
