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
        $lists = DB::table('money_current')->get();
        $count_in_hand = 0;
        $count_total = 0;
        foreach ($lists as $list) {
            $count_total += $list->num;
            if ($list->type == 1) {
                $count_in_hand += $list->num;
            }
        }

        $money_lists = DB::table('money')
            ->get();
        foreach ($money_lists as $item) {
            if ($item->is_add == 1) {
                $count_total += $item->num;
                $count_in_hand += $item->num;
            } else {
                $count_total -= $item->num;
                $count_in_hand -= $item->num;
            }
        }
        $ret = 1;
        if ($ret) {
            return [
                'msg' => 'success',
                'code' => 200,
                'count_tota' => $count_total,
                'count_in_hand' => $count_in_hand
            ];
        } else {
            return [
                'msg' => 'failed',
                'code' => 501
            ];
        }
    }

    public function getlists(Request $request)
    {
        $all = $request->all();
        $money_lists = DB::table('money')
            ->orderBy('id', 'desc')
            ->limit(20)
            ->get();
        $ret = 1;
        if ($ret) {
            return [
                'msg' => 'success',
                'code' => 200,
                'list' => $money_lists
            ];
        } else {
            return [
                'msg' => 'failed',
                'code' => 501
            ];
        }
    }
}
