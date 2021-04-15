<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassAssigningRequest;
use App\Http\Requests\UpdateSisdeckClassAssigningRequest;
use App\Repositories\SisdeckClassAssigningRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckClassAssigningController extends AppBaseController
{
    /** @var  SisdeckClassAssigningRepository */
    private $sisdeckClassAssigningRepository;

    public function __construct(SisdeckClassAssigningRepository $sisdeckClassAssigningRepo)
    {
        $this->sisdeckClassAssigningRepository = $sisdeckClassAssigningRepo;
    }

    /**
     * Display a listing of the SisdeckClassAssigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClassAssignings = $this->sisdeckClassAssigningRepository->all();

        return view('sisdeck/class_assignings/index')
            ->with('sisdeckClassAssignings', $sisdeckClassAssignings);
    }

    /**
     * Show the form for creating a new SisdeckClassAssigning.
     *
     * @return Response
     */
    public function create()
    {
        return view('sisdeck/class_assignings/create');
    }

    /**
     * Store a newly created SisdeckClassAssigning in storage.
     *
     * @param CreateSisdeckClassAssigningRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassAssigningRequest $request)
    {
        $input = $request->all();

        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->create($input);

        Flash::success('Class Assigning saved successfully.');

        return redirect(route('sisdeck.class_assignings.index'));
    }

    /**
     * Display the specified SisdeckClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->find($id);

        if (empty($sisdeckClassAssigning)) {
            Flash::error('Class Assigning not found.');

            return redirect(route('sisdeck.class_assignings.index'));
        }

        return view('sisdeck/class_assignings/show')->with('sisdeckClassAssigning', $sisdeckClassAssigning);
    }

    /**
     * Show the form for editing the specified SisdeckClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->find($id);

        if (empty($sisdeckClassAssigning)) {
            Flash::error('Class Assigning not found.');

            return redirect(route('sisdeck.class_assignings.index'));
        }

        return view('sisdeck/class_assignings/edit')->with('sisdeckClassAssigning', $sisdeckClassAssigning);
    }

    /**
     * Update the specified SisdeckClassAssigning in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassAssigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckClassAssigningRequest $request)
    {
        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->find($id);

        if (empty($sisdeckClassAssigning)) {
            Flash::error('Class Assigning not found.');

            return redirect(route('sisdeck.class_assignings.index'));
        }

        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('sisdeck.class_assignings.index'));
    }

    /**
     * Remove the specified SisdeckClassAssigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClassAssigning = $this->sisdeckClassAssigningRepository->find($id);

        if (empty($sisdeckClassAssigning)) {
            Flash::error('Class Assigning not found.');

            return redirect(route('sisdeck.class_assignings.index'));
        }

        $this->sisdeckClassAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('sisdeck.class_assignings.index'));
    }
}
