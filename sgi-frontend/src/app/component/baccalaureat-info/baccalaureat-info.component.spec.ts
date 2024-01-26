import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BaccalaureatInfoComponent } from './baccalaureat-info.component';

describe('BaccalaureatInfoComponent', () => {
  let component: BaccalaureatInfoComponent;
  let fixture: ComponentFixture<BaccalaureatInfoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [BaccalaureatInfoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(BaccalaureatInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
