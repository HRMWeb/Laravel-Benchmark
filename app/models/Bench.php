<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Bench extends Eloquent {
	public $timestamps = false;
	protected $table = 'bench';
}