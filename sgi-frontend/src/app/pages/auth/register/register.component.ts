import { Component } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrl: './register.component.scss'
})
export class RegisterComponent {
  
  public form = {
    nom: null,
    prenom: null,
    email: null,
    password: null
  };

  get isNomEmpty() {
    return !this.form.nom;
  }
  get isPrenomEmpty() {
    return !this.form.prenom;
  }
  get isEmailEmpty() {
    return !this.form.email;
  }
  get isPasswordEmpty() {
    return !this.form.password;
  }

  constructor() {}
  
  register() {
    console.log(this.form);
    // TODO: Implement registration functionality.
  }

}
