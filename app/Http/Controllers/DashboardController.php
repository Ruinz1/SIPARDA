<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ekraf;
use App\Models\EventWisata;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
   {
    $user = User::count();
    $ekraf = Ekraf::count();
    $paket = PaketWisata::count();
    $event = EventWisata::count();
    return view('admin.dashboard',compact('user','ekraf','paket','event'));
   }
}
