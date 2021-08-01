<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119023,
        'name' => 'Anggita Putri Syaffira',
        'gender' => 'Female',
        'phone' => '082135596783',
        'class' => 'XII RPL 1'];
  }
}