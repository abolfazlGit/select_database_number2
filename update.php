<?php

use Illuminate\Support\Facades\DB;



DB::table('users')->where('id' , 1)->update(['name'=>'abolfazl']);
