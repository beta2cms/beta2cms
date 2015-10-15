<?php

namespace App\Contracts\ModuleProviders;

interface iModuleProvider
{

    /**
     * Render the Module Partial
     *
     * @param $id
     * @return mixed
     */
    public function render($id);

    /**
     * Render the Preview
     *
     * @param $module_id
     * @param $sp_id
     * @return mixed
     * @internal param $id
     */
    public function preview($id);

    /**
     * Create new Module entry, Display form
     *
     * @return mixed
     */
    public function create();

    /**
     * Store new Entry
     *
     * @param $data
     * @param $node_id
     * @return mixed
     * @internal param $request
     */
    public function store($data);

    /**
     * Edit entry by given id
     *
     * @param $id
     * @return mixed
     */
    public function edit($id);

    /**
     * Update entry by given id
     *
     * @param $data
     * @param $id
     * @return mixed
     * @internal param $request
     */
    public function update($id, $data);

    /**
     * Deletes the Entry
     * Set the delete_at field
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id);


    /**
     * Validation rules
     *
     * @return mixed
     */
    public function rules();

}