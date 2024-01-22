import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './pages/auth/login/login.component';
import { registerLocaleData } from '@angular/common';
import { RegisterComponent } from './pages/auth/register/register.component';


const routes: Routes = [
  {path:'login', component: LoginComponent},
  {path:'**', component: RegisterComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
