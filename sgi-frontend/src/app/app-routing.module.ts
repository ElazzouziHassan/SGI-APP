import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './pages/auth/login/login.component';
import { RegisterComponent } from './pages/auth/register/register.component';
import { NotFoundPageComponent } from './pages/not-found-page/not-found-page.component';
import { InscriptionComponent } from './pages/inscription/inscription.component';
import { ProfileComponent } from './pages/profile/profile.component';
import { ResetPasswordComponent } from './pages/auth/reset-password/reset-password.component';
import { HomeComponent } from './pages/home/home.component';
import { ContactComponent } from './pages/contact/contact.component';
import { FormationComponent } from './pages/formation/formation.component';
import { PersonalInfoComponent } from './component/personal-info/personal-info.component';
import { BaccalaureatInfoComponent } from './component/baccalaureat-info/baccalaureat-info.component';
import { DiplomeInfoComponent } from './component/diplome-info/diplome-info.component';
import { SubmissionDocsComponent } from './component/submission-docs/submission-docs.component';
import { ChoixFormationComponent } from './component/choix-formation/choix-formation.component';
import { ReviewValidateComponent } from './component/review-validate/review-validate.component';


const routes: Routes = [
  {path:'login', title:'Login to EST SB | UCD EL JADIDA', component: LoginComponent},
  {path:'reset-password', title:'Reset Your Password | EST SB', component: ResetPasswordComponent},
  {path:'registration',title:'Register to EST SB | UCD EL JADIDA', component: RegisterComponent},
  {
    path:'home',title:'Welcome to EST SB | UCD EL JADIDA', component: HomeComponent,
    children:[
      {
        path:'inscription',title:'Inscrit to EST SB | UCD EL JADIDA', component: InscriptionComponent,
        children: [
          { path: '', component: PersonalInfoComponent },
          { path: 'baccalaureat-info', component: BaccalaureatInfoComponent },
          { path: 'diplome-info', component: DiplomeInfoComponent },
          { path: 'submission-docs', component: SubmissionDocsComponent },
          { path: 'choix-formation', component: ChoixFormationComponent },
          { path: 'review-validate', component: ReviewValidateComponent },
        ]
        
      },
      {path:'profile',title:'Welcome To Your Profile  | EST SB', component: ProfileComponent},
      {path:'',title:'Notre Formations | EST SB', component: FormationComponent},
      {path:'contact',title:'Contactez-Nous | EST SB', component: ContactComponent},
    ]
  },
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  {path: '**', title:'Error ! | Page Not Found', component: NotFoundPageComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
