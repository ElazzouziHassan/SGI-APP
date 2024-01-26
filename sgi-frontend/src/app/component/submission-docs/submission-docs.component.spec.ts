import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SubmissionDocsComponent } from './submission-docs.component';

describe('SubmissionDocsComponent', () => {
  let component: SubmissionDocsComponent;
  let fixture: ComponentFixture<SubmissionDocsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [SubmissionDocsComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(SubmissionDocsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
