<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Repositories\SlideRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Slide;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class SlideController extends AppBaseController
{
    /** @var SlideRepository $slideRepository*/
    private $slideRepository;

    public function __construct(SlideRepository $slideRepo)
    {
        $this->slideRepository = $slideRepo;
    }

    /**
     * Display a listing of the Slide.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slides = $this->slideRepository->all();

        return view('slides.index')
            ->with('slides', $slides);
    }

    /**
     * Show the form for creating a new Slide.
     *
     * @return Response
     */
    public function create()
    {
        return view('slides.create');
    }

    /**
     * Store a newly created Slide in storage.
     *
     * @param CreateSlideRequest $request
     *
     * @return Response
     */
    public function store(CreateSlideRequest $request)
    {
        $date = date('d-m-y');

        $slide = new Slide();
        $slide->tittle = $request->tittle;
        $slide->status = $request->status;
        // function file upload
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $slide->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $slide->save();
        }
        $slide->save();

        FlashFlash::success('Slide saved successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Display the specified Slide.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slide = $this->slideRepository->find($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.show')->with('slide', $slide);
    }

    /**
     * Show the form for editing the specified Slide.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slide = $this->slideRepository->find($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.edit')->with('slide', $slide);
    }

    /**
     * Update the specified Slide in storage.
     *
     * @param int $id
     * @param UpdateSlideRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlideRequest $request)
    {
        $slide = $this->slideRepository->find($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        $slide = $this->slideRepository->update($request->all(), $id);

        Flash::success('Slide updated successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Remove the specified Slide from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slide = $this->slideRepository->find($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        $this->slideRepository->delete($id);

        Flash::success('Slide deleted successfully.');

        return redirect(route('slides.index'));
    }
}
