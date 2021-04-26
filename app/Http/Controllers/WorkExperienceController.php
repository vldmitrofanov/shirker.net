<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('admin.experience.index', ['user' => $user]);
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function edit($experience_id)
    {
        $experience = \App\WorkExperience::findOrFail($experience_id);
        return view('admin.experience.update', ['experience' => $experience]);
    }

    public function update(Request $request, $experience_id)
    {
        $experience = \App\WorkExperience::findOrFail($experience_id);
        $request->validate([
            'start_date' => 'required',
            'end_date'  => 'nullable',
            'present' => 'nullable',
            'company_name' => 'required',
            'description' => 'required',
        ]);

        $present = !empty($request->present) ? 1 : 0;
        $experience->update([
            'start_date' => $request->start_date,
            'end_date'  => $present > 0 ? $request->end_date : null,
            'present' => $present,
            'company_name' => $request->company_name,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.experience.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date'  => 'nullable',
            'present' => 'nullable',
            'company_name' => 'required',
            'description' => 'required',
        ]);
        $user = Auth::user();
        $present = !empty($request->present) ? 1 : 0;
        \App\WorkExperience::create([
            'start_date' => $request->start_date,
            'end_date'  => $present > 0 ? $request->end_date : null,
            'present' => $present,
            'company_name' => $request->company_name,
            'description' => $request->description,
            'user_id' => $user->id
        ]);
        return redirect()->route('admin.experience.index');
    }

    public function delete($experience_id)
    {
        \App\WorkExperience::findOrFail($experience_id)->delete();
        return response()->json(['status' => 'OK']);
    }
}
