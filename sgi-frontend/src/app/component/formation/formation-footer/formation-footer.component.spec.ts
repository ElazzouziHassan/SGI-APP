import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormationFooterComponent } from './formation-footer.component';

describe('FormationFooterComponent', () => {
  let component: FormationFooterComponent;
  let fixture: ComponentFixture<FormationFooterComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [FormationFooterComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(FormationFooterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
