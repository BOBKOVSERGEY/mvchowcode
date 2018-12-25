<?php

class AboutUs extends Controller
{
  public static function test()
  {
    $users = DB::query('SELECT * from users');
    debug($users);
  }
}