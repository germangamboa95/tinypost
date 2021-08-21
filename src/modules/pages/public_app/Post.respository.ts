import { database } from '../../../configuration/database';

import { v4 as uuidv4 } from 'uuid';
import { PostRecord, POST_TABLE } from './Post.model';

export const findById = async (id: string): Promise<PostRecord> => {
  const [record] = await database<PostRecord>(POST_TABLE).where({
    id
  });

  return record;
};

export const createPost = async (post: PostRecord) => {
  const id = uuidv4();
  await database<PostRecord>(POST_TABLE).insert({
    ...post,
    id
  });

  const record = await findById(id);

  return record;
};

export const updatePost = async (post: PostRecord) => {
  const { id } = post;

  if (!id) {
    throw new Error(`Id is missing`);
  }

  await database<PostRecord>(POST_TABLE).where({ id }).update(post);

  const record = await findById(id);

  return record;
};

export const deletePost = async (id: string) => {
  await database<PostRecord>(POST_TABLE).where({ id }).delete();
};
