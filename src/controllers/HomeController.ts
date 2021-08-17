import { Controller, Get } from '@overnightjs/core';
import { Request, Response } from 'express';

@Controller('/')
export class HomeController {
  @Get()
  public async index(req: Request, res: Response) {
    return res.json({ message: 'Hello World' });
  }
}
