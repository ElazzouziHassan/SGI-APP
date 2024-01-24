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
import { SideBarComponent } from './component/profile/side-bar/side-bar.component';
import { FormationComponent } from './pages/formation/formation.component';
import { HeroComponent } from './component/formation/hero/hero.component';

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
    SideBarComponent,
    FormationComponent,
    HeroComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
