<?php

namespace App\Http\Controllers\Api;

use App\realState;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RealStateController extends Controller
{
    private $realState;

    public function __construct(RealState $realState)
    {
        $this->realState->paginate('10');
    }

    public function index()
    {
        $realState = $this->realState->paginate('10');

        return response()->json($realState, 200);
    }

    public function store(Request $request)
    {
        return response()->json($request->all(), 200);
    }

    /*public function store(Request $request)
    {
        $data = $request->all();

        try{

            $realState = $thiis->realState->create($data);

            return response()->json([
                'data' => [
                    'msg' => 'Imóvel cadastrado com sucesso!'
                ]
                ], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        } 
    }*/
}
