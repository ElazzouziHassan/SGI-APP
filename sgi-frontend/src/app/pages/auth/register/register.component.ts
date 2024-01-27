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
  constructor() {}
  register() {
    console.log(this.form);
    // TODO: Implement registration functionality.
  }

}
