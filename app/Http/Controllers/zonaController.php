<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatezonaRequest;
use App\Http\Requests\UpdatezonaRequest;
use App\Repositories\zonaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class zonaController extends AppBaseController
{
    /** @var  zonaRepository */
    private $zonaRepository;

    public function __construct(zonaRepository $zonaRepo)
    {
        $this->zonaRepository = $zonaRepo;
    }

    /**
     * Display a listing of the zona.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->zonaRepository->pushCriteria(new RequestCriteria($request));
        $zonas = $this->zonaRepository->all();

        return view('zonas.index')
            ->with('zonas', $zonas);
    }

    /**
     * Show the form for creating a new zona.
     *
     * @return Response
     */
    public function create()
    {
        return view('zonas.create');
    }

    /**
     * Store a newly created zona in storage.
     *
     * @param CreatezonaRequest $request
     *
     * @return Response
     */
    public function store(CreatezonaRequest $request)
    {
        $input = $request->all();

        $zona = $this->zonaRepository->create($input);

        Flash::success('Zona saved successfully.');

        return redirect(route('zonas.index'));
    }

    /**
     * Display the specified zona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $zona = $this->zonaRepository->findWithoutFail($id);

        if (empty($zona)) {
            Flash::error('Zona not found');

            return redirect(route('zonas.index'));
        }

        return view('zonas.show')->with('zona', $zona);
    }

    /**
     * Show the form for editing the specified zona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $zona = $this->zonaRepository->findWithoutFail($id);

        if (empty($zona)) {
            Flash::error('Zona not found');

            return redirect(route('zonas.index'));
        }

        return view('zonas.edit')->with('zona', $zona);
    }

    /**
     * Update the specified zona in storage.
     *
     * @param  int              $id
     * @param UpdatezonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatezonaRequest $request)
    {
        $zona = $this->zonaRepository->findWithoutFail($id);

        if (empty($zona)) {
            Flash::error('Zona not found');

            return redirect(route('zonas.index'));
        }

        $zona = $this->zonaRepository->update($request->all(), $id);

        Flash::success('Zona updated successfully.');

        return redirect(route('zonas.index'));
    }

    /**
     * Remove the specified zona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $zona = $this->zonaRepository->findWithoutFail($id);

        if (empty($zona)) {
            Flash::error('Zona not found');

            return redirect(route('zonas.index'));
        }

        $this->zonaRepository->delete($id);

        Flash::success('Zona deleted successfully.');

        return redirect(route('zonas.index'));
    }
}
