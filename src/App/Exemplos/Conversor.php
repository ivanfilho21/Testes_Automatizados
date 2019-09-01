<?php

namespace App\Exemplos;

/**
 * @package App
 * @subpackage Exemplos
 * @author Ivan Filho <ivanfilho21@gmail.com>
 */
class Conversor
{
	protected $table = array(
		"I" => 1,
		"V" => 5,
		"X" => 10,
		"L" => 50,
		"C" => 100,
		"D" => 500,
		"M" => 1000
	);

	/**
	 * Converts a string containing Roman Numbers to int.
	 *
	 * @return int
	 * @author Ivan Filho <ivanfilho21@gmail.com>
	 */
	public function converter(String $roman)
	{
		$ac = 0;
		$lastNeighboorRight = 0;
		for ($i = strlen($roman) -1; $i >= 0; $i--) {
			$current = 0;
			$n = $roman[$i];

			if (array_key_exists($n, $this->table)) {
				$current = $this->table[$n];
			}

			$mult = ($current < $lastNeighboorRight) ? -1 : 1;

			$ac += ($current * $mult);

			$lastNeighboorRight = $current;
		}

		return $ac;
	}
}