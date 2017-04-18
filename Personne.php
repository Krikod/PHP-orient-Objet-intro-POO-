<?php

class Personne {
	public $nom;
	public $prenom;
	public $adresse;
	public $date_naissance;

	public function afficher_info($nom, $prenom, $adresse, $date_naissance) {

		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->adresse = $adresse;
		$this->date_naissance = $date_naissance;
		
		echo '<p><strong>Information sur la nouvelle personne:</strong><br>' . $nom 
		. ' ' . $prenom . '<br>' . $adresse . '<br>' . 'Né le ' . $date_naissance . '</p>';
		}

	public function modifier_adresse($nouvelle_adresse) {
		if ($nouvelle_adresse != NULL) {
			$this->adresse = $nouvelle_adresse;
			
			echo '<p><strong>Information actualisée sur la nouvelle personne:</strong><br>'
			 . $this->nom . ' ' . $this->prenom . '<br>' . $this->adresse . '<br>' . 'Né le '
			  . $this->date_naissance . '</p>';
		}
	}

	public function calculer_age($date_naissance) {
		$this->date_naissance = $date_naissance;
		$this->age = ((time() - strtotime($date_naissance)) / 3600 / 24 / 365.242);
		$age_arrondi = floor($this->age);

		echo $this->prenom . ' ' . $this->nom . ' ' . 'a' . ' ' . $age_arrondi . ' ans.';
	}
}


// On instancie une nouvelle Personne
$lagaffe = new Personne();
$lagaffe->afficher_info('Lagaffe', 'Gaston', '2, rue de la gare', '27-05-1949');

$lagaffe->modifier_adresse('5, rue nouvelle'); 

$lagaffe->calculer_age("27-05-1949");
