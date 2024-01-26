import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RegisterComponent } from './pages/auth/register/register.component';
import { LoginComponent } from './pages/auth/login/login.component';
import { ProfileComponent } from './pages/profile/profile.component';
import { InscriptionComponent } from './pages/inscription/inscription.component';
import { NotFoundPageComponent } from './pages/not-found-page/not-found-page.component';
import { ResetPasswordComponent } from './pages/auth/reset-password/reset-password.component';
import { HomeComponent } from './pages/home/home.component';
import { NavBarComponent } from './component/nav-bar/nav-bar.component';
import { ContactComponent } from './pages/contact/contact.component';
import { FormationComponent } from './pages/formation/formation.component';
import { HeroComponent } from './component/formation/hero/hero.component';
import { FormationCardComponent } from './component/formation/formation-card/formation-card.component';
import { FormationFooterComponent } from './component/formation/formation-footer/formation-footer.component';
import { SideBarComponent } from './component/side-bar/side-bar.component';
import { PersonalInfoComponent } from './component/personal-info/personal-info.component';
import { BaccalaureatInfoComponent } from './component/baccalaureat-info/baccalaureat-info.component';
import { DiplomeInfoComponent } from './component/diplome-info/diplome-info.component';
import { SubmissionDocsComponent } from './component/submission-docs/submission-docs.component';
import { ChoixFormationComponent } from './component/choix-formation/choix-formation.component';
import { ReviewValidateComponent } from './component/review-validate/review-validate.component';

@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent,
    ProfileComponent,
    InscriptionComponent,
    NotFoundPageComponent,
    ResetPasswordComponent,
    HomeComponent,
    NavBarComponent,
    ContactComponent,
    FormationComponent,
    HeroComponent,
    FormationCardComponent,
    FormationFooterComponent,
    SideBarComponent,
    PersonalInfoComponent,
    BaccalaureatInfoComponent,
    DiplomeInfoComponent,
    SubmissionDocsComponent,
    ChoixFormationComponent,
    ReviewValidateComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
