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
          { path: 'personal-info', component: PersonalInfoComponent },
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
