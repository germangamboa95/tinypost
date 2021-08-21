export interface CommentRecord {
  id?: string;
  content: string;
  user_id: string;
  post_id: string;
  reference_id?: string;
}

export const COMMENT_TABLE = 'comments';
