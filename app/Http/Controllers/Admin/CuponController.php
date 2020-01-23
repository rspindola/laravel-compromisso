<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCuponRequest;
use App\Http\Requests\StoreCuponRequest;
use App\Http\Requests\UpdateCuponRequest;
use App\Cupon;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CuponController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Cupon::query()->select(sprintf('%s.*', (new Cupon)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'cupon_show';
                $editGate      = 'cupon_edit';
                $deleteGate    = 'cupon_delete';
                $crudRoutePart = 'cupons';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('price', function ($row) {
                return $row->discount ? $row->discount : "";
            });
            $table->editColumn('finish_time', function ($row) {
                return $row->finish_time ? $row->finish_time : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.cupons.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.create');
    }

    public function store(StoreCuponRequest $request)
    {
        $cupon = Cupon::create($request->all());

        return redirect()->route('admin.cupons.index');
    }

    public function edit(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.edit', compact('cupon'));
    }

    public function update(UpdateCuponRequest $request, Cupon $cupon)
    {
        $cupon->update($request->all());

        return redirect()->route('admin.cupons.index');
    }

    public function show(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.show', compact('cupon'));
    }

    public function destroy(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cupon->delete();

        // return back();
    }

    public function massDestroy(MassDestroyCuponRequest $request)
    {
        Cupon::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
