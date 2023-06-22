<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Todo;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::withCount('todos')->get();
        $totalTodos = Todo::count();
        $totalUsers = User::count();


        return view('admin.index', compact('users', 'totalTodos', 'totalUsers'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User has been deleted successfully');
    }
    public function makeAdmin(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = 'admin';
        $user->save();

        return redirect()->back()->with('success', 'User has been promoted to admin');
    }
}
