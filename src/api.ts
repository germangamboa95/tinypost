import express from 'express';
import { Server } from '@overnightjs/core';
import { controllers } from './controllers';

export class ApiServer extends Server {
  constructor() {
    super(process.env.NODE_ENV === 'development'); // setting showLogs to true
    this.app.use(express.json());
    this.setupControllers();
  }

  private setupControllers(): void {
    super.addControllers(controllers.map((c) => new c()));
  }

  public start(port: number): void {
    this.app.listen(port, () => {
      console.log('Server listening on port: ' + port);
    });
  }
}
