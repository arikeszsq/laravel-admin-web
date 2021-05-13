<?php


namespace App\Http\Controllers;


use App\Models\ZsqMoneyConsume;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function add()
    {
        $data = [
            'name' => $_REQUEST['text'],
            'num' => 222
        ];
        return json_encode([
            'msg' => 'success',
            'code' => 200,
            'data' => $data
        ]);
    }
}
