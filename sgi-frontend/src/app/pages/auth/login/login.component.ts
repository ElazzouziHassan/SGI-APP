import { Component } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent {

  public form = {
    
    email: null,
    password: null

  };

  get isEmailEmpty() {
    return !this.form.email;
  }

  get isPasswordEmpty() {
    return !this.form.password;
  }
  
  constructor() {}

  login() {
    console.log(this.form);
    // TODO: Implement login functionality.
  }
  
}
