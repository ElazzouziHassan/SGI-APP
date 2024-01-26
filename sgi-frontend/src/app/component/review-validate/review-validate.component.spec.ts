import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ReviewValidateComponent } from './review-validate.component';

describe('ReviewValidateComponent', () => {
  let component: ReviewValidateComponent;
  let fixture: ComponentFixture<ReviewValidateComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ReviewValidateComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ReviewValidateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
