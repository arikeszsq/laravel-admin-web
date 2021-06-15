<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function add(Request $request)
    {
        $inputs = $request->all();
        $data = [
            'title' => isset($inputs['title']) ? $inputs['title'] : '',
            'num' => isset($inputs['num']) ? $inputs['num'] : '',
            'is_add' => isset($inputs['is_add']) ? $inputs['is_add'] : '',
            'is_com' => isset($inputs['is_com']) ? $inputs['is_com'] : '',
            'bak' => isset($inputs['bak']) ? $inputs['bak'] : '',
            'created_at' => date('Y-m-d H:i:s', time())
        ];
        $ret = DB::table('money')->insert($data);
        if ($ret) {
            return [
                'msg' => 'success',
                'code' => 200,
                'data' => $data
            ];
        } else {
            return [
                'msg' => 'failed',
                'code' => 501,
                'data' => $data
            ];
        }
    }

    public function count(Request $request)
    {
        $count = 0;
        $current = DB::table('money_current')
            ->get();
        foreach ($current as $item) {
            $count += $item->num;
        }

        $money_lists = DB::table('money')
            ->get();
        foreach ($money_lists as $item) {
            if ($item->is_add == 1) {
                $count += $item->num;
            } else {
                $count -= $item->num;
            }
        }
        $ret = 1;
        if ($ret) {
            return [
                'msg' => 'success',
                'code' => 200,
                'count' => $count
            ];
        } else {
            return [
                'msg' => 'failed',
                'code' => 501
            ];
        }
    }
}
