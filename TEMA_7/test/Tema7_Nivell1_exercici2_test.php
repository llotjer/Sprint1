<?php

use MyNotes\Notes;
use PHPUnit\Framework\TestCase;

class DiscerningByNotesTest extends TestCase {

   protected $nota;

    public function setUp():void{

		$this->nota = new Notes;

	}

        function testDiscerningByNotes(){
          if($this->nota->DiscerningByNotes() >= $this->nota::PRIME_D) {
           $this->assertGreaterThanOrEqual($this->nota::PRIME_D, $this->nota->discerningByNotes(), "La nota no és suficient per a promocionar a Primera Divisió");
          } elseif($this->nota->DiscerningByNotes() >= $this->nota::SECOND_D){
           $this->assertGreaterThanOrEqual($this->nota::SECOND_D, $this->nota->DiscerningByNotes(),  "La nota no és suficient per a promocionar a Segona Divisió");
          } elseif($this->nota->DiscerningByNotes() >= $this->nota::REPROVE){
           $this->assertGreaterThanOrEqual($this->nota::SECOND_D, $this->nota->DiscerningByNotes(),  "La nota no és suficient per a promocionar a Tercera Divisió");
          } elseif($this->nota->DiscerningByNotes() < $this->nota::REPROVE){
           $this->assertLessThan($this->nota::SECOND_D, $this->nota->DiscerningByNotes(),  "La nota no és suficient per a continuar, hauràs de repetir");
          }
        
        }

        
}