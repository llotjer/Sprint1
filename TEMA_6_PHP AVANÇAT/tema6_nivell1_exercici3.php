<?php

class ObjecteCadena {

    public function __toString() {
        return 'Canviant el comportament del mètode màgic __toString(),
        per a que enlloc de retornar un error, retorni aquest missatge';
    }
}

$exemple = new ObjecteCadena();
echo $exemple;