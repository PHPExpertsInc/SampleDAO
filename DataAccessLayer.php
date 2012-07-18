<?php
// Copyright (c) 2012 Theodore R.Smith (theodore@phpexperts.pro)
// DSA-1024 Fingerprint: 10A0 6372 9092 85A2 BB7F  907B CB8B 654B E33B F1ED
// Provided by the PHP University (www.phpu.cc) and PHPExperts.pro (www.phpexperts.pro)
//
// This file is dually licensed under the terms of the following licenses:
// * Primary License: OSSAL v1.0 - Open Source Software Alliance License
//   * Key points:
//       5.Redistributions of source code in any non-textual form (i.e.
//          binary or object form, etc.) must not be linked to software that is
//          released with a license that requires disclosure of source code
//          (ex: the GPL).
//       6.Redistributions of source code must be licensed under more than one
//          license and must not have the terms of the OSSAL removed.
//   * See http://people.freebsd.org/~seanc/ossal/ for complete details.
//
// * Secondary License: Creative Commons Attribution License v3.0
//   * Key Points:
//       * You are free:
//           * to copy, distribute, display, and perform the work
//           * to make non-commercial or commercial use of the work in its original form
//       * Under the following conditions:
//           * Attribution. You must give the original author credit. You must retain all
//             Copyright notices and you must include the sentence, "Based upon work from
//             PHPExperts.pro (www.phpexperts.pro).", wherever you list contributors.
//   * See http://creativecommons.org/licenses/by/3.0/us/ for complete details.

interface DAL_Driver
{
	public function add($namespace, $key, $value);
	public function get($namespace, $key);
	public function update($namespace, $key, $value);
	public function delete($namespace, $key);
}

// Uses the Composite design pattern.
class DataAccessLayer implements DAL_Driver
{
	/** @var DAL_Driver */
	protected $driver;

	public function __construct(DAL_Driver $driver)
	{
		$this->driver = $driver;
	}

	public function add($namespace, $key, $value)
	{
		return $this->driver->add($namespace, $key, $value);
	}

	public function get($namespace, $key)
	{
		return $this->driver->get($namespace, $key);
	}

	public function update($namespace, $key, $value)
	{
		return $this->driver->update($namespace, $key, $value);
	}

	public function delete($namespace, $key)
	{
		return $this->driver->delete($namespace, $key);
	}
}
