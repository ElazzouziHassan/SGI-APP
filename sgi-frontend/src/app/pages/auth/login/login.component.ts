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
  constructor() {}
  login() {
    console.log(this.form);
    // TODO: Implement login functionality.
  }
}
