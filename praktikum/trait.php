<?php

trait Fakultas {

	// Boleh juga ada property

	public function setFakultas(string $a) {
		return $a;
	}
}

trait Prodi {

	// Boleh juga ada property

	public function setProdi(string $b) {
		return $b;
	}
}

class Mahasiswa {

	use Fakultas, Prodi;
	public string $nama;

	public function setNama(string $c) {

		$this->nama = $c;
	}
}

$mhsw = new Mahasiswa();
$mhsw->setNama("Wynne");
echo $mhsw->setFakultas("FST") . " "
. $mhsw->setProdi("SistemInformasi") . " "
. $mhsw->nama;