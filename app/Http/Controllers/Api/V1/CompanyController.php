<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Http\Controllers\Api\BaseController;
use App\Models\Company;
class CompanyController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CompanyResource::collection(Company::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->validated());

        return $this->sendResponse(
            new CompanyResource($company),
            'Company created successfully'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);

        return $this->sendResponse(
            new CompanyResource($company),
            'Company retrieved successfully'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
