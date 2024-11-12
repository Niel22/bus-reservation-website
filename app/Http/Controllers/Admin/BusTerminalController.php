<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Terminal;
use Illuminate\Http\Request;

class BusTerminalController extends Controller
{

    public function index()
    {
        return view('admin.terminal.index', [
            'terminals' => Terminal::all()
        ]);
    }

    public function create_terminal()
    {
        return view('admin.terminal.create');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:terminals,name'],
            'phone' => ['required', 'min:10', 'max:11'],
            'image' => ['required']
        ]);

        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);

        $data['image'] = 'images/'.$imageName;

        $result = Terminal::create($data);

        if($result){
            return redirect()->to(route('admin.bus-terminal'));
        }else{
            return back()->withErrors(['name' => 'Problem creating terminal']);
        }
        
    }

    public function edit_terminal($id){
        $terminal = Terminal::findOrFail($id);

        return view('admin.terminal.edit', [
            'terminal' => $terminal
        ]);
    }

    public function update(Request $request)
    {
        $terminal = Terminal::findOrFail($request->id);

        $data = $request->validate([
            'name' => ['required', 'string'],
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);

            $data['image'] = 'images/' . $imageName;

            $result = $terminal->update([
                'name' => $data['name'],
                'image' => $data['image']
            ]);

            if($result){
                return redirect()->to(route('admin.bus-terminal'));
            }else{
                return back()->withErrors(['name' => 'Problem updating terminal']);
            }
        }

        $result = $terminal->update([
            'name' => $data['name']
        ]);

        if($result){
            return redirect()->to(route('admin.bus-terminal'));
        }else{
            return back()->withErrors(['name' => 'Problem updating terminal']);
        }
        
    }

    public function delete($id){
        $terminal = Terminal::findOrFail($id);

        $terminal->delete();

        return redirect()->to(route('admin.bus-terminal'));

    }
}
