import { Component } from '@angular/core';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrl: './profile.component.scss'
})
export class ProfileComponent {
  user = {
    nom : 'El azzouzi',
    prenom: 'Hassan',
    specialite: 'Web Developer',
    telephone: '+212 648540458',
    email: 'ezhassan.info@gmail.com',
    adresse: 'Hay elmatar El Jadida',

  }
  baccalaureat = {
    etablissement: "IBN KHALDOUNE",
    directiction: "Casablanca-Settat",
    session: "juin 2016",
    serie: "Scientifiques",
    filier: "Sc. Math option A",
    mention: "Passable",
    moyene:"11.16"
  }
  diplome = {
    etablissement: "ISTA CITE DE L'AIR",
    directiction: "Casablanca-Settat",
    session: "2023",
    type: "Technicien speacialise",
    filier: "Developpement web",
    mention: "Excelent",
    moyene:"17, 82",
    nb_annees: "2 ans"
  }

}
