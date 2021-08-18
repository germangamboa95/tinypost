import { User, UserInterface } from '../models/User';

export const createUser = async (user: UserInterface) => {
  const { username } = user;

  const existing_user = await User.findOne({ username });

  if (existing_user) return existing_user;

  return User.create(user);
};
