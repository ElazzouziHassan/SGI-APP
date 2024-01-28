import { Component } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrl: './contact.component.scss'
})
export class ContactComponent {
  public form = {
    name: null,
    email: null,
    message: null
  };
  constructor() {}
  submitForm() {
    console.log(this.form);
    // TODO: Implement form submission functionality.
  }
  get isNameEmpty() {
    return !this.form.name;
  }
  get isEmailEmpty() {
    return !this.form.email;
  }
  get isMessageEmpty() {
    return !this.form.message;
  }
}
