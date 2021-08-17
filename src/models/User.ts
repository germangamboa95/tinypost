import { Schema, model } from 'mongoose';

export interface UserInterface {
  username: string;
  email?: string;
}

const user_schema = new Schema<UserInterface>({
  username: {
    type: String,
    require: true,
    unique: true
  },
  email: {
    type: String,
    require: false,
    unique: true
  }
});

export const User = model<UserInterface>('User', user_schema);
