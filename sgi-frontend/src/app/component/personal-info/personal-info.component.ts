import { Component } from '@angular/core';

@Component({
  selector: 'app-personal-info',
  templateUrl: './personal-info.component.html',
  styleUrl: './personal-info.component.scss'
})
export class PersonalInfoComponent {
  public formData = {
    codeMassar: null,
    cin: null,
    nomFr: null,
    nomAr: null,
    prenomFr: null,
    prenomAr: null,
    telephone: null,
    dateNaissance: null,
    email: null,
    adresseNaissanceFr: null,
    adresseNaissanceAr: null
  };
  constructor() {}
  submitForm() {
    console.log(this.formData);
    // TODO: Implement form submission functionality.
  }
  get isCodeMassarEmpty() {
    return !this.formData.codeMassar;
  }
  get isCinEmpty() {
    return !this.formData.cin;
  }
  get isNomFrEmpty() {
    return !this.formData.nomFr;
  }
  get isNomArEmpty() {
    return !this.formData.nomAr;
  }
  get isPrenomFrEmpty() {
    return !this.formData.prenomFr;
  }
  get isPrenomArEmpty() {
    return !this.formData.prenomAr;
  }
  get isTelephoneEmpty() {
    return !this.formData.telephone;
  }
  get isDateNaissanceEmpty() {
    return !this.formData.dateNaissance;
  }
  get isEmailEmpty() {
    return !this.formData.email;
  }
  get isAdresseNaissanceFrEmpty() {
    return !this.formData.adresseNaissanceFr;
  }
  get isAdresseNaissanceArEmpty() {
    return !this.formData.adresseNaissanceAr;
  }
}
