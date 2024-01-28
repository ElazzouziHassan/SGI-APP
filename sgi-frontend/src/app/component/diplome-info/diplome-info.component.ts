import { Component } from '@angular/core';

@Component({
  selector: 'app-diplome-info',
  templateUrl: './diplome-info.component.html',
  styleUrl: './diplome-info.component.scss'
})
export class DiplomeInfoComponent {
  public diplomeFormData = {
    Etablissement: null,
    Direction_provinciale: null,
    Promotion: null,
    type: null,
    Specialite: null,
    nb_annees: null,
    Moyene_s1: null,
    Moyene_s2: null,
    Moyene_s3: null,
    Moyene_s4: null,
    Moyene_generale: null,
    nb_mention: null,
    
  };
  constructor() {}
  submitDiplomeForm() {
    console.log(this.diplomeFormData);
    // TODO: Implement form submission functionality.
  }
  get isEtablissementEmpty() {
    return !this.diplomeFormData.Etablissement;
  }
  get isDirection_provincialeEmpty() {
    return !this.diplomeFormData.Direction_provinciale;
  }
  get isPromotionEmpty() {
    return !this.diplomeFormData.Promotion;
  }
  get isSpecialiteEmpty() {
    return !this.diplomeFormData.Specialite;
  }
  get istypeEmpty() {
    return !this.diplomeFormData.type;
  }
}
