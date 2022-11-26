<?php

namespace App\Http\Controllers;


use App\Models\OrgaGroup;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrgaGroupController extends Controller
{
    public function index(){
        return view('admin.orgagroup.index', [
                 'orgagroups' => OrgaGroup::all()
                ]);
    }


    public function show(OrgaGroup $orgagroup){
        return view('admin.orgagroup.show',[
            'orgagroup' => $orgagroup
        ]);
    }

    public function create(){
        
        return view('admin.orgagroup.create');
    }

    public function store(){
        
        OrgaGroup::create(array_merge($this->validateOrgaGroup(), []));
        return redirect('/admin/orgagroups')->with('success', 'Organisationsgruppe anlegen');
    }

    public function edit(OrgaGroup $orgagroup){
        return view('admin.orgagroup.edit', [
            'orgagroup' => $orgagroup
        ]);
    }

    public function update(OrgaGroup $orgagroup){
        $attributes = $this->validateOrgaGroup($orgagroup);
        $orgagroup->update($attributes);
        return redirect('/admin/orgagroups')->with('success', 'Organisationsgruppe aktualisieren');
    }

    protected function validateOrgaGroup(?OrgaGroup $orgagroup = null): array{

        $orgagroup ??= new OrgaGroup();
        return request()->validate([
            
            'name' => 'required'
        ]);
    }
}
