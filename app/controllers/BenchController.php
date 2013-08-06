<?php

class BenchController extends BaseController {

	public function plain()
	{
		return View::make('bench/plain');
	}

	public function model()
	{
		for ($i = 0; $i < 100; $i++) {
			foreach (Bench::all() as $b) {
				error_log($b->title);
			}
		}
		for ($i = 0; $i < 10; $i++) {
			$b = new Bench();
			$b->title = 'test bench';
			$b->save();
			$b->delete();
		}
		return View::make('bench/model');
	}

}