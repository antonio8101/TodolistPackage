<?php

namespace Abruno\TodoList;

class SomeOtherServiceContractImpl implements SomeOtherServiceContract {

	public function multiply( int $n1, int $n2 ): int {
		return $n1 * $n2;
	}
}
