import { Controller, Get } from '@overnightjs/core';
import { Request, Response } from 'express';
import { createUser } from '../services/UserService';
@Controller('/')
export class HomeController {
  @Get()
  public async index(req: Request, res: Response) {
    console.time('hey');
    await createUser({
      username: 'german_not_german'
    });

    console.timeEnd('hey');
    return res.json({ message: 'Hello World' });
  }
}
