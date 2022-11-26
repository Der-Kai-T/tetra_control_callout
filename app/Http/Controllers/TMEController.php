<?php

namespace App\Http\Controllers;

use App\Models\OrgaGroup;
use App\Models\TME;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TMEController extends Controller
{
    public function index(){
        return view('admin.tme.index', [
                 'tmes' => TME::all()
                ]);
    }


    public function show(TME $tme){
        return view('admin.tme.show',[
            'tme' => $tme
        ]);
    }

    public function create(){
        $orgagroups = OrgaGroup::all();
        return view('admin.tme.create', [
            'orgagroups' => $orgagroups
        ]);
    }

    public function store(){
       
        TME::create(array_merge($this->validateTME(), []));
        return redirect('/admin/tmes')->with('success', 'TME gespeichert');
    }

    public function edit(TME $tme){
        $orgagroups = OrgaGroup::all();
        return view('admin.tme.edit', [
            'tme' => $tme,
            'orgagroups' => $orgagroups
        ]);
    }

    public function update(TME $tme){
        $attributes = $this->validateTME($tme);
        $tme->update($attributes);
        return redirect('/admin/tme')->with('success', 'TME aktualisiert');
    }

    protected function validateTME(?TME $tme = null): array{

        $tme ??= new TME();
        return request()->validate([
            'ISSI' => ['required', 'numeric', Rule::unique('t_m_e_s', 'ISSI')->ignore($tme)],
            'short' => 'required',
            'long' => 'required',
            'orga_groups_id' => 'required'
        ]);
    }
}
