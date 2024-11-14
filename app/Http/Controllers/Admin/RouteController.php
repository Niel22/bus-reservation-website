<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Terminal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RouteController extends Controller
{
    public function index(){
        return view('admin.route.index', [
            'routes' => Route::all(),
        ]);
    }

    public function create_route(){
        return view('admin.route.create', [
            'terminals' => Terminal::all()
        ]);
    }

    public function create(Request $request){
        $states = [
            'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno', 'Cross River',
            'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina',
            'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau',
            'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara', 'FCT'
        ];

        $data = $request->validate([
            'terminal_id' => ['required', 'integer', 'exists:terminals,id'],
            'destination' => ['required', Rule::in($states)],
            'hours' => ['required'],
            'minutes' => ['required', 'integer', 'between:1,60'],
            'price' => ['required', 'integer'],
            'seats' => ['required', 'integer'],
            'departure' => ['required', 'date']
        ]);

        $terminal = Terminal::where('id', $data['terminal_id'])->firstOrFail();
        
        $result = $terminal->routes()->create([
            'destination' => $data['destination'],
            'duration' => $data['hours'] . "H " . $data['minutes'] . "Min",
            'price' => $data['price'],
            'seats' => $data['seats'],
            'departure' => $data['departure']
        ]);

        if($result){
            return redirect()->to(route('admin.routes'));
        }else{
            return back()->withErrors(['terminal' => 'Problem creating routes. Try again later']);
        }


    }

    public function edit_route($id){
        $route = Route::findOrFail($id);

        return view('admin.route.edit', [
            'terminals' => Terminal::all(),
            'route' => $route
        ]);
    }

    public function update_routes(Request $request, $id){
        $route = Route::findOrFail($id);

        $states = [
            'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno', 'Cross River',
            'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina',
            'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau',
            'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara', 'FCT'
        ];

        $data = $request->validate([
            'terminal_id' => ['required', 'integer', 'exists:terminals,id'],
            'destination' => ['required', Rule::in($states)],
            'hours' => ['required'],
            'minutes' => ['required', 'integer', 'between:1,60'],
            'price' => ['required', 'integer'],
            'seats' => ['required', 'integer'],
            'departure' => ['required', 'date']
        ]);
        
        $result = $route->update([
            'terminal_id' => $data['terminal_id'],
            'destination' => $data['destination'],
            'duration' => $data['hours'] . "H " . $data['minutes'] . "Min",
            'price' => $data['price'],
            'seats' => $data['seats'],
            'departure' => $data['departure']
        ]);

        if($result){
            return redirect()->to(route('admin.routes'));
        }else{
            return back()->withErrors(['terminal' => 'Problem updating routes. Try again later']);
        }
    }

    public function delete($id){

        $route = Route::findOrFail($id);

        $route->delete();

        return redirect()->to(route('admin.routes'));
    }
}
