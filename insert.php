<?php


use Illuminate\Support\Facades\DB;



DB::table('users')->insert(
    [
    'name'=>'abolfazl' , 
    'email' =>'abolfazl@gmail.com'
    ]
  
);


//number2
DB::table('users')->insert(
    ['name'=>'abolfazl'],
    ['name' =>'karim']
);



//number3
//بعد از ثبت در دیتابیس به آیدی جدول ذخیره شده دست رسی پیدا میکنیم

$id = DB::table('users')->insertGetId(
    [
        'name'=>'abolfazl'
    ]);

    