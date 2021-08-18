import { Schema, model } from 'mongoose';
import { UserInterface } from '../../../models/User';

export interface PostInterface {
  title: string;
  body: string;
  author: UserInterface

}

const post_schema = new Schema<PostInterface>({
  title: {
    type: String,
    require: true,
    unique: true
  },
  body: {
    type: String,
    require: false,
    unique: true
  },
  author: { 
    type: Schema.Types.ObjectId, 
    ref: "User"
  }
});

export const User = model<PostInterface>('Post', post_schema);
