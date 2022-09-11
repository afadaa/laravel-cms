<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;
use App\Repositories\GaleriRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Flash;
use Response;

class GaleriController extends AppBaseController
{
    /** @var GaleriRepository $galeriRepository*/
    private $galeriRepository;

    public function __construct(GaleriRepository $galeriRepo)
    {
        $this->galeriRepository = $galeriRepo;
    }

    /**
     * Display a listing of the Galeri.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $galeris = $this->galeriRepository->all();

        return view('galeris.index')
            ->with('galeris', $galeris);
    }

    /**
     * Show the form for creating a new Galeri.
     *
     * @return Response
     */
    public function create()
    {
        return view('galeris.create');
    }

    /**
     * Store a newly created Galeri in storage.
     *
     * @param CreateGaleriRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriRequest $request)
    {
        $date = date('d-m-y');

        $galeri = new Galeri();
        $galeri->tittle = $request->tittle;
        // function file upload
        if ($request->has('photo')){
            $photo = $request->file('photo');
            $filename = $date.'-'.$photo->getClientOriginalName();
            $ext = $photo->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $galeri->photo = $photo->move($destinationPath,$photo->getClientOriginalName());
            $galeri->save();
        }

        $galeri->save();

        Flash::success('Galeri saved successfully.');

        return redirect(route('galeris.index'));
    }

    /**
     * Display the specified Galeri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galeri = $this->galeriRepository->find($id);

        if (empty($galeri)) {
            Flash::error('Galeri not found');

            return redirect(route('galeris.index'));
        }

        return view('galeris.show')->with('galeri', $galeri);
    }

    /**
     * Show the form for editing the specified Galeri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galeri = $this->galeriRepository->find($id);

        if (empty($galeri)) {
            Flash::error('Galeri not found');

            return redirect(route('galeris.index'));
        }

        return view('galeris.edit')->with('galeri', $galeri);
    }

    /**
     * Update the specified Galeri in storage.
     *
     * @param int $id
     * @param UpdateGaleriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriRequest $request)
    {
        $galeri = $this->galeriRepository->find($id);

        if (empty($galeri)) {
            Flash::error('Galeri not found');

            return redirect(route('galeris.index'));
        }

        $galeri = $this->galeriRepository->update($request->all(), $id);

        Flash::success('Galeri updated successfully.');

        return redirect(route('galeris.index'));
    }

    /**
     * Remove the specified Galeri from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galeri = $this->galeriRepository->find($id);

        if (empty($galeri)) {
            Flash::error('Galeri not found');

            return redirect(route('galeris.index'));
        }

        $this->galeriRepository->delete($id);

        Flash::success('Galeri deleted successfully.');

        return redirect(route('galeris.index'));
    }
}
