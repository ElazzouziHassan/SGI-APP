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
}
