import { User, UserInterface } from '../models/User';

export const createUser = async (user: UserInterface) => {
  const { username } = user;

  const user_exists = (await User.findOne({ username }).count()) > 0;

  console.log(user_exists);
};
