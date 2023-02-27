<?php

use Illuminate\Support\Facades\DB;



$users = DB::table('users')->where('id' , 1)->get();

