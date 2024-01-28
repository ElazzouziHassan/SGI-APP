import { Component } from '@angular/core';

@Component({
  selector: 'app-baccalaureat-info',
  templateUrl: './baccalaureat-info.component.html',
  styleUrl: './baccalaureat-info.component.scss'
})
export class BaccalaureatInfoComponent {
  public formData = {
    etablissement: null,
    directionProvinciale: null,
    session: null,
    serie: null,
    filiere: null,
    mention: null,
    moyenneGenerale: null,
    
  };
  constructor() {}
  submitForm() {
    console.log(this.formData);
    // TODO: Implement form submission functionality.
  }
  get isEtablissementEmpty() {
    return !this.formData.etablissement;
  }
  get isDirectionProvincialeEmpty() {
    return !this.formData.directionProvinciale;
  }
  get isSessionEmpty() {
    return !this.formData.session;
  }
  get isSerieEmpty() {
    return !this.formData.serie;
  }
  get isFiliereEmpty() {
    return !this.formData.filiere;
  }
  get isMentionEmpty() {
    return !this.formData.mention;
  }
  get isMoyenneGeneraleEmpty() {
    return !this.formData.moyenneGenerale;
  }
}
