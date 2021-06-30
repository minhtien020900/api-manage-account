<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AccountTypeRequest;
use App\Http\Service\AccountType;
use App\Http\Service\AccountTypeService;
use Symfony\Component\HttpFoundation\Response;

class AccountTypeController extends BaseController
{
    private $accountTypeService;

    public function __construct(AccountTypeService $accountTypeService)
    {
        $this->accountTypeService = $accountTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountTypeRequest $request)
    {
        //
        if (isset($request->validator) && $request->validator->fails()) {
            $errors = $request->validator->messages();
            return $this->sendError($errors, __('custom_message.account_type.add_error'),Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {
            $accountType = $this->accountTypeService->create($request);
            return $this->sendResponse($accountType, __('custom_message.account_type.add_success'), Response::HTTP_OK);
        }

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
