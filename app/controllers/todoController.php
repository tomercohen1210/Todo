<?php

class todoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $results = DB::table('missions')->get();

        return View::make('todo', ['results' => $results]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id,$title,$isCompleted)
	{
        DB::table('missions')->insert(
            array('id' => $id, 'title' => $title, 'isCompleted'=>$isCompleted)
        );
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
	    /*
        $results = DB::table($name)->get();
        return json_encode($results);
*/
        $results = DB::table('missions')->get();

        return Response::json(array('todo'=>$results),200);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,$title,$isCompleted)
	{

        DB::table('missions')
            ->where('id', $id)
            ->update(array('title' => $title,'isCompleted'=>$isCompleted));

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        DB::table('missions')
            ->where('id', $id)
            ->update(array('title' => "123",'isCompleted'=>true));

	}


}
