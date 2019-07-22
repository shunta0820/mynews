<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function add()
  {
      return view('admin.profile.create');
  }

 

 public function edit()
 {
 return view('admin.profile.edit');
 }
 public function update()
 {
 return redirect('admin/profile/edit');
 }
 public function create(Request $request)
  {
 return redirect('admin/profile/create');
    $this->validate($request, profile::$rules);

      $news = new profile;
      $form = $request->all();
      unset($form['_token']);

      unset($form['image']);


      $profile->fill($form);
      $profile->save();
  }
  
}
?>
