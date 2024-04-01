<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    public function index(): void
    {
        $url = "https://api.map.baidu.com/directionlite/v1/driving?origin=40.01116,116.339303&destination=39.936404,116.452562&ak=FnX0IUFle02I2wEHF9yHAdzYOKthpWyB";
        // $url = "https://api.map.baidu.com/directionlite/v1/driving?
        // origin=22.10432084054504,108.2735837246998&
        // destination=22.17332281995949,108.7631486466497&ak=FnX0IUFle02I2wEHF9yHAdzYOKthpWyB";

        $res = Http::get($url);
        $data = $res->json();
        dd($data);
    }

    // public
}
