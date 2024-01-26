import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DiplomeInfoComponent } from './diplome-info.component';

describe('DiplomeInfoComponent', () => {
  let component: DiplomeInfoComponent;
  let fixture: ComponentFixture<DiplomeInfoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [DiplomeInfoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(DiplomeInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
