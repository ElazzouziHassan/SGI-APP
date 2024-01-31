import { TestBed } from '@angular/core/testing';

import { ApiUsersService } from './api-users.service';

describe('ApiUsersService', () => {
  let service: ApiUsersService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ApiUsersService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
