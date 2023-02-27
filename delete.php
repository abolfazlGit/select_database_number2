<?php

use Illuminate\Support\Facades\DB;



DB::table('user')->where('id')->delete();