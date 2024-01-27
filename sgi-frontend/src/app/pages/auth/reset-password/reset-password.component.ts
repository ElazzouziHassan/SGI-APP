import { Component } from '@angular/core';

@Component({
  selector: 'app-reset-password',
  templateUrl: './reset-password.component.html',
  styleUrl: './reset-password.component.scss'
})
export class ResetPasswordComponent {
  public form = {
    email: null
  };
  constructor() {}
  resetPassword() {
    console.log(this.form);
    // TODO: Implement reset password functionality.
  }
}
