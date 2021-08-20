import { database } from '../../../configuration/database';

import { v4 as uuidv4 } from 'uuid';
import { CommentRecord, COMMENT_TABLE } from './Comment.model';

export const findById = async (id: string): Promise<CommentRecord> => {
  const [record] = await database<CommentRecord>(COMMENT_TABLE).where({
    id
  });

  return record;
};

export const createComment = async (comment: CommentRecord) => {
  const id = uuidv4();
  await database<CommentRecord>(COMMENT_TABLE).insert({
    ...comment,
    id
  });

  const record = await findById(id);

  return record;
};

export const updateComment = async (comment: CommentRecord) => {
  const { id } = comment;

  await database<CommentRecord>(COMMENT_TABLE).where({ id }).update(comment);

  const record = await findById(id);

  return record;
};

export const deleteComment = async (id: string) => {
  await database<CommentRecord>(COMMENT_TABLE).where({ id }).delete();
};
