import mongoose from 'mongoose';

export const connect_mongo = () => {};
mongoose.connect(`${process.env.MONGO_CONNECTION}`, {
  useNewUrlParser: true,
  useUnifiedTopology: true
});
