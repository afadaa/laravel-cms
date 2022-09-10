<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;
use App\Repositories\PengumumanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PengumumanController extends AppBaseController
{
    /** @var PengumumanRepository $pengumumanRepository*/
    private $pengumumanRepository;

    public function __construct(PengumumanRepository $pengumumanRepo)
    {
        $this->pengumumanRepository = $pengumumanRepo;
    }

    /**
     * Display a listing of the Pengumuman.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pengumumen = $this->pengumumanRepository->all();

        return view('pengumumen.index')
            ->with('pengumumen', $pengumumen);
    }

    /**
     * Show the form for creating a new Pengumuman.
     *
     * @return Response
     */
    public function create()
    {
        return view('pengumumen.create');
    }

    /**
     * Store a newly created Pengumuman in storage.
     *
     * @param CreatePengumumanRequest $request
     *
     * @return Response
     */
    public function store(CreatePengumumanRequest $request)
    {
        $input = $request->all();

        $pengumuman = $this->pengumumanRepository->create($input);

        Flash::success('Pengumuman saved successfully.');

        return redirect(route('pengumumen.index'));
    }

    /**
     * Display the specified Pengumuman.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengumuman = $this->pengumumanRepository->find($id);

        if (empty($pengumuman)) {
            Flash::error('Pengumuman not found');

            return redirect(route('pengumumen.index'));
        }

        return view('pengumumen.show')->with('pengumuman', $pengumuman);
    }

    /**
     * Show the form for editing the specified Pengumuman.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengumuman = $this->pengumumanRepository->find($id);

        if (empty($pengumuman)) {
            Flash::error('Pengumuman not found');

            return redirect(route('pengumumen.index'));
        }

        return view('pengumumen.edit')->with('pengumuman', $pengumuman);
    }

    /**
     * Update the specified Pengumuman in storage.
     *
     * @param int $id
     * @param UpdatePengumumanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePengumumanRequest $request)
    {
        $pengumuman = $this->pengumumanRepository->find($id);

        if (empty($pengumuman)) {
            Flash::error('Pengumuman not found');

            return redirect(route('pengumumen.index'));
        }

        $pengumuman = $this->pengumumanRepository->update($request->all(), $id);

        Flash::success('Pengumuman updated successfully.');

        return redirect(route('pengumumen.index'));
    }

    /**
     * Remove the specified Pengumuman from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengumuman = $this->pengumumanRepository->find($id);

        if (empty($pengumuman)) {
            Flash::error('Pengumuman not found');

            return redirect(route('pengumumen.index'));
        }

        $this->pengumumanRepository->delete($id);

        Flash::success('Pengumuman deleted successfully.');

        return redirect(route('pengumumen.index'));
    }
}
