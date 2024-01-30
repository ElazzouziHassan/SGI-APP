import { Component } from '@angular/core';

@Component({
  selector: 'app-submission-docs',
  templateUrl: './submission-docs.component.html',
  styleUrl: './submission-docs.component.scss'
})
export class SubmissionDocsComponent {
  formData = {
    cinR: null,
    cinV: null,
    bacR: null,
    bacV: null,
    rnBac: null,
    diplome: null,
    rnS1: null,
    rnS2: null,
    rnS3: null,
    rnS4: null,
    photo: null,
    demande: null
  };
  constructor() {}
  onSubmit() {
    console.log(this.formData);
    // Handle form submission here
  }
}
