<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassSchedulingRequest;
use App\Http\Requests\UpdateSisdeckClassSchedulingRequest;
use App\Repositories\SisdeckClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckClassSchedulingController extends AppBaseController
{
    /** @var  SisdeckClassSchedulingRepository */
    private $sisdeckClassSchedulingRepository;

    public function __construct(SisdeckClassSchedulingRepository $sisdeckClassSchedulingRepo)
    {
        $this->sisdeckClassSchedulingRepository = $sisdeckClassSchedulingRepo;
    }

    /**
     * Display a listing of the SisdeckClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClassSchedulings = $this->sisdeckClassSchedulingRepository->all();

        return view('sisdeck/class_schedulings/index')
            ->with('sisdeckClassSchedulings', $sisdeckClassSchedulings);
    }

    /**
     * Show the form for creating a new SisdeckClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('sisdeck/class_schedulings/create');
    }

    /**
     * Store a newly created SisdeckClassScheduling in storage.
     *
     * @param CreateSisdeckClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassSchedulingRequest $request)
    {
        $input = $request->all();

        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('sisdeck.class_schedulings.index'));
    }

    /**
     * Display the specified SisdeckClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->find($id);

        if (empty($sisdeckClassScheduling)) {
            Flash::error('Class Scheduling not found.');

            return redirect(route('sisdeck.class_schedulings.index'));
        }

        return view('sisdeck/class_schedulings/show')->with('sisdeckClassScheduling', $sisdeckClassScheduling);
    }

    /**
     * Show the form for editing the specified SisdeckClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->find($id);

        if (empty($sisdeckClassScheduling)) {
            Flash::error('Class Scheduling not found.');

            return redirect(route('sisdeck.class_schedulings.index'));
        }

        return view('sisdeck/class_schedulings/edit')->with('sisdeckClassScheduling', $sisdeckClassScheduling);
    }

    /**
     * Update the specified SisdeckClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckClassSchedulingRequest $request)
    {
        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->find($id);

        if (empty($sisdeckClassScheduling)) {
            Flash::error('Class Scheduling not found.');

            return redirect(route('sisdeck.class_schedulings.index'));
        }

        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('sisdeck.class_schedulings.index'));
    }

    /**
     * Remove the specified SisdeckClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClassScheduling = $this->sisdeckClassSchedulingRepository->find($id);

        if (empty($sisdeckClassScheduling)) {
            Flash::error('Class Scheduling not found.');

            return redirect(route('sisdeck.class_schedulings.index'));
        }

        $this->sisdeckClassSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('sisdeck.class_schedulings.index'));
    }
}
